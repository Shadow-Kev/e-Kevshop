<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Categorie;
use App\Marque;
use App\Http\Controllers\SettingsController;
use App\Media;
use App\Caracterique;
use App\ProduitsToImages;
use App\Produit;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use \AppendIterator;
use \ArrayIterator;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class ProduitController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $produit = Produit::orderBy('id', 'desc')->paginate(200);
        
        return view('produit.index', compact('produit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $marques = Marque::all();
        $categories = Categorie::all();


        return view('produit._create', compact('marques', 'categories'));
    }


    /** Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $settinCtrl = new SettingsController();
        $settings = $settinCtrl->getSettingsMap();



        $rules = [
            'nom' => 'string|min:2|max:200|required',
            'prix' => 'numeric',
            'prix_reduit' => 'numeric',
            'prix_achat' => 'numeric',
            'quantite' => 'required|integer',
            'shop' => 'integer',
            'marque' => 'integer|required',
            'categorie' => 'integer|required',
            'description' => 'string|required|min:2',
            'image.*' => 'file|image|mimes:jpeg,png,gif,webp|max:2048'

        ];


        if(Auth::user()->shop_id == $settings["KADM_SHOP_ID"]){
            $rules['shop'] = 'integer|required';
        }

        $messages = [
            'nom.string' => 'Le nom doit etre une chaine charactère',
            'nom.min' => 'Le nom doit contenir au moins 2 charactères',
            'nom.max' => 'Le nom doit contenir au plus 70 charactèes',
            'prix.numeric' => 'Le prix est de type décimale',
            'prix_reduit.numeric' => 'Le prix réduit est de type numérique',
            'prix_achat.numeric' => 'Le prix d\'achat est de type décimale',
            'shop.integer' => 'La boutique selectioné n\'est pas valide ',
            'shop.required' => 'Veuillez selectionner une boutique ',
            'marque.required' => 'Séléctionez une marque',
            'marque.integer' => 'La marque selectioné n\'est pas valide ',
            'categorie.required' => 'Séléctionez une categorie',
            'categorie.integer' => 'La categorie selectioné n\'est pas valide ',
            'nom.required' => 'Le nom  est obligatoire',
            'description.required' => 'La description est obligatore',
            'description.string' => 'La description doit etre une chaine charactère',
            'description.min' => 'La description doit contenir au moins 2 charactères',
            'image.file'=>'Veuillez charger un fichier valide',
            'image.mime' => 'veuillez charger une image de type jpeg ou png ou jif ou webp',
            'image.max' => 'Cette image est trop volumineux'
        ];


        $validator = Validator::make($request->all(), $rules, $messages);


        if ($validator->fails()) {
            return redirect('manager/produit/create')->with('errors', $validator->errors());
        }

        $data = [
            'nom' => $request->nom,
            'prix' => $request->prix,
            'prix_achat' => $request->prix_achat,
            'prix_reduit' => $request->prix_reduit,
            'quantite' => $request->quantite,
            'marque' => $request->marque,
            'categorie' => $request->categorie,
            'garantie' => $request->garantie,
            'description' => $request->description,
            'active' => $request->active ? 1 : 0,
            'lien_details_constructeur' => $request->lien_details_constructeur ? $request->lien_details_constructeur : null,
            'slug' => str_slug(name_generator('produit-' . $request->nom, 10), '-'),
        ];

        if(Auth::user()->shop_id == $settings["KADM_SHOP_ID"]){
            $data['shop'] = $request->shop;
        }else{
            $data['shop'] = Auth::user()->shop_id;
        }

        $newPdt = Produit::create($data);
        if ($newPdt) {

            $produit = Produit::where('slug', '=', $data['slug'])->first();
            $produit_id = $newPdt->id;

            $allImages = $request->file('image');
            

            foreach ($allImages as $key=>$value) {
                $token = name_generator('produit-'.$value->getClientOriginalName(), 10);
               // $filename = file_manager()->filename( $token, $value);
                //dd($value);
                //$filename = $token.basename($value->hashName());
                
                $filename = $token;
                $data_img = [
                    'nom' => $filename,
                    'description' => str_slug($filename, '-'),
                    'slug' => name_generator('image-produit', 10),
                    'alt' => $filename,
                    'owner' => Auth::user()->id,
                    'shop_id' => Auth::user()->shop_id
                ];

                $imgId = Media::create($data_img);
                move_uploaded_file($_FILES['image']['tmp_name'][$key], 'storage/' .$filename);
            
                // storage
                if($key == 0){
                    $newPdt->image = $filename;
                    $newPdt->save();
                }
                ProduitsToImages::create([
                    'id_produits'=>$newPdt->id,
                    'id_images'=>$imgId->id,
                    'ordre'=>$key
                ]);
            }



            return redirect('manager/produit')->with('success', 'Produit ajouté avec succès, mais le fichier media n\'a pas été ajouté!');;


        }

        return redirect(route('produit.create'))->with('error', 'erreur enregistrement Produit !');
    }

    /**
     * Display the specified resource.
     *
     * @param int $slug
     *
     * @return Response
     */
    public function show($id)
    {
        if (Produit::where('id', '=', $id)->first()) {
            $produit = Produit::where('id', '=', $id)->first();
          return view('produit.show', compact('produit'));

        //    return response()->json(['data'=>$produit]);
        }
      return redirect('notfound')->with('error', 'L\'item que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if (Produit::where('id', '=', $id)->first()) {
            $produit = Produit::where('id', '=', $id)->first();
            $categories = Categorie::pluck('nom','id');
            return view('produit.edit', compact('produit','categories'));
        }
        return redirect('notfound')->with('error', 'L\'item que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return
     */
    public function update($id, Request $request)
    {
        if (Produit::where('id', '=', $id)->first()) {
            $produit = Produit::where('id', '=', $id)->first();

            $ok = null;
            $nom = $request->nom;
            $prix = $request->prix;
            $prix_achat = $request->prix_achat;
            $prix_reduit = $request->prix_reduit;
            $quantite = $request->quantite;
            $marque = $request->marque;
            $categorie = $request->categorie;
            $garantie = $request->garantie;
            $description = $request->description;
            $shop = $request->shop;
            $lien_details_constructeur = $request->lien_details_constructeur;

            $rules = [
                'nom' => 'string|min:2|max:200|required',
                'prix' => 'numeric',
                'shop' => 'integer',
                'marque' => 'integer|required',
                'categorie' => 'required|integer',
                'description' => 'string|required|min:2',
                'image.*' => 'file|image|mimes:jpeg,png,gif,webp|max:2048'

            ];

            $messages = [
                'nom.string' => 'Le nom doit etre une chaine charactère',
                'nom.min' => 'Le nom doit contenir au moins 2 charactères',
                'nom.max' => 'Le nom doit contenir au plus 70 charactèes',
                'prix.numeric' => 'Le prix est de type décimale',
                'prix_reduit.numeric' => 'Le prix réduit est de type numérique',
                'prix_achat.numeric' => 'Le prix d\'achat est de type décimale',
                'shop.integer' => 'La boutique selectioné n\'est pas valide ',
                'marque.required' => 'Séléctionez une marque',
                'marque.integer' => 'La marque selectioné n\'est pas valide ',
                'categorie.required' => 'Séléctionez une categorie',
                'categorie.integer' => 'La categorie selectioné n\'est pas valide ',
                'nom.required' => 'Le nom  est obligatoire',
                'description.required' => 'La description est obligatore',
                'description.string' => 'La description doit etre une chaine charactère',
                'description.min' => 'La description doit contenir au moins 2 charactères',
                'image.file'=>'Veuillez charger un fichier valide',
                'image.mime' => 'veuillez charger une image de type jpeg ou png ou jif ou webp',
                'image.max' => 'Cette image est trop volumineux'
            ];
        
            $validator = Validator::make($request->all(), $rules, $messages);

            $produit->nom = $nom;
            $produit->prix = $prix;
            $produit->prix_achat = $prix_achat;
            $produit->prix_reduit = $prix_reduit;
            $produit->quantite = $quantite;
            $produit->marque = $marque;
            $produit->categorie = $categorie;
            $produit->garantie = $garantie;
            $produit->description = $description;
            $produit->shop = $shop;
            $produit->lien_details_constructeur = $lien_details_constructeur;
            
            if ($validator->fails()) {
                redirect('produit.create')->with('errors', $validator->errors());
            }
            if($request->has('active')){
                $produit->active = 1;
            }else{
                $produit->active = 0;
            }
            if($request->hasFile('image')) {
                $allowedfileExtension=['jpeg','jpg','png','gif'];
                $allImages = $request->file('image');
                foreach($allImages as $file=>$value) {
                    $filename = name_generator('produit-'.$value->getClientOriginalName(), 10);
                    $extension = $value->getClientOriginalExtension();
                    $check=in_array($extension,$allowedfileExtension);
            
                    if($check) {
                        $data_img = [
                            'nom' => $filename,
                            'description' => str_slug($filename, '-'),
                            'slug' => name_generator('image-produit', 10),
                            'alt' => $filename,
                            'owner' => Auth::user()->id,
                            'shop_id' => Auth::user()->shop_id
                        ];
                        $image = Media::create($data_img);
                        $idimg_new = $image->id;
                        if($file == 0){
                            $idimg_old = $produit->images->first()->id;
                            //dd($idimg_old);
                            //$idimg_new = $idimg_old;
                            ProduitsToImages::where('id_produits', $produit->id)->where('id_images', $idimg_old)->update(['id_images' => $idimg_new, 'ordre' => 0]);
                            $produit->image = $filename;
                            //$produit->slug = str_slug($filename, '-');
                            $produit->save();
                        }
                        //dd($request->image);
                        foreach($request->image as $photo){
                            $filename = $photo->storeAs('/', $filename);
                        }
                    }
                }
            }
            $ok = 1;
            if ($ok == 1) {
                $produit->update();
                return redirect('manager/produit')->with('success', 'Produit mise à jours avec succès!');;
            }
            return redirect(route('produit.edit', $id))->with('error', 'erreur mise à jours Produit !');
        }
        return redirect('notfound')->with('error', 'Le produit que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return
     */
    public function destroy($id)
    {
        if (Produit::where('id', '=', $id)->first()) {
            $produit = Produit::where('id', '=', $id)->first();
            $produit->delete();
            return redirect('produit');
        }
        return redirect('manager/produit');
    }


}
