<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rubrique;
use App\Shop;
use App\Categorie;
use App\Produit;
use App\PubsPositions;
use App\RubriqueProduits;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Image;
use File;

class RubriquesController extends Controller
{

    
    public function index()
    {
        $rubs = Rubrique::orderBy('id', 'desc')->paginate(6);
        return view('rubriques.index', compact('rubs'));
    }


    public function create()
    {
        return view('rubriques.create');
    }

    public function store(Request $request)
    {


        $rules = [
            'titre'=>'required',
            'type_affichage' => 'required',
            'ordre' => 'required|numeric',
        ];

        $messages = [
            'titre.required'=>'Le titre  est obligatoire',
            'type_affichage.required' => 'La type d\'affichage est obligatoire',
            'ordre.required' => 'Veuillez indiquer l\ordre d\'affichage',
        ];
        //'type_publicite.required' => 'Veuillez choisir un type de publicite'

        $validator = Validator::make($request->all(), $rules,$messages);

        if ($validator->fails()) {
            //redirect('rubriques.create')->with('errors',$validator->errors());
            return redirect()->back()->withInput()->withErrors($validator);
        }


        $data = [
            'titre'=>$request->get('titre'),
            'ordre' => $request->get('ordre'),
            'type_affichage' => $request->get('type_affichage'),
            'statut' => $request->has('statut') ? 1 : 0
        ];

        $validator = Validator::make($data, $rules,$messages);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
       
        $pubs = Rubrique::create($data);
        if($pubs) {
            return redirect('manager/rubriques')->with('success', 'La rubrique est créée avec succès!');
        }
        return redirect()->back()->withInput()->withErrors(['erreur enregistrement rubrique !']);
    

    }


    public function show($id)
    {
        if (Rubrique::where('id','=',$id)->first()){
            $pubs = Rubrique::where('id','=',$id)->first();
            return view('rubriques.show', compact('pubs'));
        }
        return redirect('notfound')->with('error','L\'element que vous cherchez n\'existe pas ou a été supprimé !');
    }

    public function edit($id)
    {
        if (Rubrique::where('id','=',$id)->first()){
            $rubs = Rubrique::where('id','=',$id)->first();
            return view('rubriques.edit', compact('rubs'));
        }
        return redirect('notfound')->with('error','L\'element que vous cherchez n\'existe pas ou a été supprimé !');
    }


    public function update($id, Request $request)
    {
        $pro = Rubrique::where('id','=',$id)->count();
        if ($pro){
            $pubs= Rubrique::where('id','=',$id)->first();
       
            $rules = [
                'titre'=>'required',
                'type_affichage' => 'required',
                'ordre' => 'required|numeric',
            ];
    
            $messages = [
                'titre.required'=>'Le titre  est obligatoire',
                'type_affichage.required' => 'La type d\'affichage est obligatoire',
                'ordre.required' => 'Veuillez indiquer l\ordre d\'affichage',
            ];

            $data = [
                'titre'=>$request->get('titre'),
                'ordre' => $request->get('ordre'),
                'type_affichage' => $request->get('type_affichage'),
                'statut' => $request->has('statut') ? 1 : 0
            ];
            
            $validator = Validator::make($data, $rules,$messages);
            if ($validator->fails()) {
                redirect('manager/rubriques/create')->with('errors',$validator->errors());
            }
           
            if ($pubs->update($data)) {

            // Storage::disk('public')->put('pubs/', $fileContents);
                return redirect('manager/rubriques')->with('success', 'Rubrique mise à jours avec succès!');;
            }
        
        }
        return redirect()->back()->withInput()->withErrors(['La rubrique que vous cherchez n\'existe pas ou a été supprimé !']);
    }

    public function destroy($id)
    {
        if (Rubrique::where('id','=',$id)->first()){
            $pub = Rubrique::where('id','=',$id)->first();
            $pub->delete();
            return redirect('rubriques');
        }
        return redirect('rubriques');
    }


  
    public function saveProdsForRubrique(Request $request)
    {

       

        $rules = [
            'rubrique_id'=>'required',
            'liste_produits' => 'required',
        ];

        $messages = [
            'rubrique_id.required'=>'Aucune rubrique specifiee',
            'liste_produits.required' => 'Veuillez selectionner au moin un produit',
        ];
    
        $validator = Validator::make($request->all(), $rules,$messages);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if(is_array($request->liste_produits)){
            foreach ($request->liste_produits as $value) {
                $nb = RubriqueProduits::where('rubrique_id','=',$request->rubrique_id)->where('produit_id','=',$value)->count();
                if($nb==0){
                    $data=[
                        "rubrique_id"=>$request->rubrique_id,
                        "produit_id"=> $value
                    ];
                    RubriqueProduits::create($data);
                }
            }
            return redirect('manager/rubriques/details/'.$request->rubrique_id)->with('success', 'Produits ajoutes avec succès!');
        }
        return redirect()->back()->withInput()->withErrors(['erreur enregistrement rubrique !']);
    }

    public function dropFromRub($idRubrique, $idProduits)
    {
        if(RubriqueProduits::where('rubrique_id','=',$idRubrique)->where('produit_id','=',$idProduits)->first()){
            $rubpdt = RubriqueProduits::where('rubrique_id','=',$idRubrique)
            ->where('produit_id','=',$idProduits)
            ->first();
            $rubpdt->delete();
            return response()->json(['res'=>true]);
        }
        return response()->json(['res'=>false]);
    }

    public function setLeadProduct($idRubrique, $idProduits)
    {
        if(RubriqueProduits::where('rubrique_id','=',$idRubrique)->where('produit_id','=',$idProduits)->first()){
            $rubpdt = RubriqueProduits::where('rubrique_id','=',$idRubrique)
            ->where('produit_id','=',$idProduits)
            ->update(['is_lead_product'=>1]);
            
            RubriqueProduits::where('rubrique_id','=',$idRubrique)
                              ->where('produit_id','<>',$idProduits)
                              ->where('deleted_at',null)
                            ->update(['is_lead_product'=>0]);


            return response()->json(['res'=>true]);
        }
        return response()->json(['res'=>false]);
    }

    public function getprodsfromcatfour($cat, $four){

        $list = Produit::whereRaw(" 1 ");
        if($cat > 0){
            $list->where('categorie','=',$cat);
        }
        if($four > 0){
            $list->where('shop','=',$four);
        }

        $list->where('deleted_at',null)->where('active',1);
        return response()->json($list->get());

    }

    
    public function displayDetails($rubriqueId){
        $rubs = Rubrique::find($rubriqueId);
        $liste_fournisseurs = Shop::where('deleted_at',null)->orderby('nom','asc')->get();
        $liste_categories = Categorie::where('active',1)->where('deleted_at',null)->orderBy('nom','asc')->get();
        return view('rubriques.add_products', compact('rubs','liste_fournisseurs','liste_categories'));
    }



}
