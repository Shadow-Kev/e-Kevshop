<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Categorie;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Validator;
use App\Media;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class CategorieController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categorie = Categorie::orderBy('nom', 'asc')->paginate(15);
        return view('categorie.index', compact('categorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

      $rules = [
            'nom'=>'string|min:2|max:70|required',
            'description'=>'string|min:2',
            'ordre'=>'required'
         ];

         $messages = [
             'nom.string'=>'Le nom doit etre une chaine charactère',
             'nom.min'=>'Le nom doit contenir au moins 2 charactères',
             'nom.max'=>'Le nom doit contenir au plus 70 charactèes',
             'nom.required'=>'Le nom  est obligatoire',
             'description.string'=>'La description doit etre une chaine charactère',
             'description.min'=>'La description doit contenir au moins 2 charactères',
             'ordre.required' => 'Veuillez indiquer la position dans l\'ordre d\'affichage'
         ];

         $validator = Validator::make($request->all(), $rules,$messages);

         if ($validator->fails()) {
              return redirect()->back()->with('errors',$validator->errors())->withInput();
         }

        // $data =  [
        //     'nom' => $request->nom, 
        //     'description' => $request->description, 
        //     'image' => $filename, 
        //    'slug' => name_generator('categorie',20),
        //    'displayOnMenu' => ($request->has('displayOnMenu') ? 1 : 0 ),
        //    'active' => ($request->has('active') ? 1 : 0 ),
        //    'ordre'  => ($request->has('ordre') ? $request->ordre : 1 ),
        //    'is_categorie_accessoire' => ($request->has('is_categorie_accessoire') ? 1 : 0 )
        // ];

        $data =  [
            'nom' => $request->nom, 
            'description' => $request->description, 
           'slug' => name_generator('categorie',20),
           'displayOnMenu' => ($request->has('displayOnMenu') ? 1 : 0 ),
           'active' => ($request->has('active') ? 1 : 0 ),
           'ordre'  => ($request->has('ordre') ? $request->ordre : 1 ),
           'is_categorie_accessoire' => ($request->has('is_categorie_accessoire') ? 1 : 0 )
        ];

        $cat = Categorie::create($data);


        if ($cat) {
            if($request->hasFile('image')){
                $token = name_generator('kadmarket-categorie', 10);
                $path = file_manager()->filename('storage/' . $token, 'image');
                $filename = file_manager()->filename($token, 'image');
    
    
                $format = file_manager()->extension('image');
                $extention = [
                    'png', 'PNG', 'JPEG', 'jpeg', 'jpg', 'JPG'
                    ];

                if (!in_array($format, $extention)) {
                    $data_img = [
                        'nom' => $filename,
                        'description' => str_slug($filename, '-'),
                        'slug' => name_generator('image-categorie',20),
                        'alt' => $filename,
                        'owner' => Auth::user()->id
                    ];
                    $m = Media::create($data_img);
                    if ($m) {
                        // file_manager()->store($path, 'image');
                        $cat->image = $path;
                        $cat->save();
                        $cover = $request->file('image');
                        Storage::disk('public')->put($filename,  File::get($cover));
                        session()->flash('success', 'image ajouté avec succès ');
                        return redirect()->route('categorie.index')->with('success', 'categorie ajouté avec succès!');
                    }else{
                        return redirect()->route('categorie.create')->with('error', 'Erreur enregistrement fichier media!');
                    }
                }else{
                    return redirect()->route('categorie.create')->with('error', 'Format de fichier incorrect!');
                }
            }else{
                return redirect()->route('categorie.index')->with('success', 'categorie ajouté avec succès!');
            }
                
        }else{
            return redirect('manager/categorie.create')->with('error', 'erreur enregistrement Categorie !');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if (Categorie::where('id', '=', $id)->first()) {
            $categorie = Categorie::where('id', '=', $id)->first();
            return view('categorie.show', compact('categorie'));
        }
        return redirect('manager/notfound')->with('error', 'L\'item que vous cherchez n\'existe pas ou a été supprimé !');
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
        if (Categorie::where('id', '=', $id)->first()) {
            $categorie = Categorie::where('id', '=', $id)->first();
            return view('categorie.edit', compact('categorie'));
        }
        return redirect('manager/notfound')->with('error', 'L\'item que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {

        if (Categorie::where('id', '=', $id)->first()) {
           $nom= '';
           $description='';
           $image = '';

            $categorie = Categorie::where('id', '=', $id)->first();

           $rules = [
            'nom'=>'string|min:2|max:70|required',
            'description'=>'string|min:2'
         ];

         $messages = [
             'nom.string'=>'Le nom doit etre une chaine charactère',
             'nom.min'=>'Le nom doit contenir au moins 2 charactères',
             'nom.max'=>'Le nom doit contenir au plus 70 charactèes',
             'nom.required'=>'Le nom est obligatoire',
             'description.string'=>'La description doit etre une chaine charactère',
             'description.min'=>'La description doit contenir au moins 2 charactères',
         ];

         $validator = Validator::make($request->all(), $rules,$messages);

         if ($validator->fails()) {
              return redirect('manager/categorie/edit/'.$id)->with('errors',$validator->errors());
         }
         
        $data =  [
            'nom' => $request->nom, 
            'description' => $request->description, 
            'image' => $request->file('image'), 
            'displayOnMenu' => ($request->has('displayOnMenu') ? 1 : 0 ),
            'active' => ($request->has('active') ? 1 : 0 ),
            'is_categorie_accessoire' => ($request->has('is_categorie_accessoire') ? 1 : 0 ),
            'ordre'  =>  ($request->has('ordre') ? $request->ordre : 1 )
        ];

        $_data = [
            'nom' => $categorie->nom, 
            'description' => $categorie->description, 
            'image' => $categorie->image,
            'slug' => $categorie->slug,
            'displayOnMenu' => $categorie->displayOnMenu,
            'active' => $request->active ,
            'is_categorie_accessoire' => ($request->has('is_categorie_accessoire') ? 1 : 0 )
        ];

        if($data['nom'] === $_data['nom']){
              $nom = $_data['nom'];
           }else{
               $nom = $data['nom'];
           }

           if($data['description'] === $_data['description']){
              $description = $_data['description'];
           }else{
               $description = $data['description'];
           }

           if($request->hasFile('image')){
               $image = $request->file('image');
           }else{
               $image = $categorie->image;
           }

            if($request->has('displayOnMenu')){
                $displayOnMenu = 1;
            }else{
                $displayOnMenu = 0;
            }

            if($request->has('active')){
                $active =1;
            }else{
                $active = 0;
            }

            
            if($request->has('is_categorie_accessoire')){
                $is_cat_accessoire =1;
            }else{
                $is_cat_accessoire = 0;
            }


            if($request->has('ordre')){
                $ordre =1;
            }else{
                $ordre = 0;
            }

           $updatable
            = [
            'nom' => $nom, 
            'description' => $description, 
            'image' => $image,
            'displayOnMenu' => $displayOnMenu,
            'active' => $active,
            'is_categorie_accessoire'=> $is_cat_accessoire,
            'slug' => $categorie->slug,
            'ordre' => $ordre
           ];


            if ($categorie->update($updatable)) {
                return redirect('manager/categorie')->with('success', 'Categorie mise à jours avec succès !');;
            }
            return redirect('manager/categorie.edit')->with('error', 'erreur mise à jours Categorie !');
        }
        return redirect('manager/notfound')->with('error', 'Le categorie que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $slug
     *
     * @return Response
     */
    public function destroy($id)
    {
        if (Categorie::where('id', '=', $id)->first()) {
            $categorie = Categorie::where('id', '=', $id)->first();
            $categorie->delete();
            return redirect('manager/categorie');
        }
        return redirect('manager/categorie');
    }

}
