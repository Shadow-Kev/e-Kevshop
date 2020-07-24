<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Caracterique;
use App\Produit;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Validator;


class CaracteriqueController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       // $caracterique = Caracterique::orderBy('id', 'desc')->paginate(6);;
        $caracterique = Produit::orderBy('id', 'desc')->paginate(20);
        return view('caracterique.index', compact('caracterique'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $prods = Produit::orderBy('nom')->select('id','nom')->get();
        return view('caracterique.create',['prods'=>$prods]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        $rules = [
            'nom'=>'required',
            'valeur'=>'required',
            'produit'=>'integer|min:1|required'
         ];

         $messages = [
             'nom.string'=>'Le nom doit etre une chaine charactère',
             'nom.min'=>'Le nom doit contenir au moins 2 charactères',
             'nom.max'=>'Le nom doit contenir au plus 70 charactèes',
             'nom.required'=>'Le nom  est obligatoire',
             'valeur.required'=>'La valeur est obligatoire',
             'valeur.string'=>'La valeur doit etre une chaine charactère',
             'valeur.min'=>'La valeur doit contenir au moins 2 charactères',
             'valeur.max'=>'La valeur doit contenir au plus 255 charactèes',
             'valeur.required'=>'La valeur est obligatoire',
             'produit.integer'=>'Le produit doit etre de type produit',
             'produit.min'=>'Le produit est invalide',
             'produit.required'=>'Le produit est obligatoire',
         ];

         
         $validator = Validator::make($request->all(), $rules,$messages);
         
        if ($validator->fails()) {
             return redirect('manager/caracterique/create')->with('errors',$validator->errors());    
        }
        //dd($request->all());
        $data = $request->all();
        
        foreach ($data['nom'] as $i => $value) {
            if(!is_null($value)){
                $d =[
                    'nom' => $value, 
                    'valeur' =>$data['valeur'][$i], 
                    'produit' =>(integer) $request->produit, 
                    'slug' =>str_slug($value,'-')
                ];
                Caracterique::create($d);
            }
        }
    
        return redirect(route('caracteristique.index'))->with('success', 'Caracterique ajouté avec succès!');;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     *
     * @return Response
     */
    public function show($id)
    {
         if (Caracterique::where('id','=',$id)->first()){
             $caracterique = Caracterique::where('id','=',$id)->first();
             $prods = Produit::orderBy('nom')->select('id','nom')->get();
             return view('caracterique.show', compact('caracterique','prods'));
        }
        return redirect('notfound')->with('error','L\'item que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
         if (Caracterique::where('id','=',$id)->first()){
                     $caracterique = Caracterique::where('id','=',$id)->first();
                     $prods = Produit::orderBy('nom')->select('id','nom')->get();
                   return view('caracterique.edit', compact('caracterique','prods'));
                }
                return redirect('notfound')->with('error','L\'item que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
          if (Caracterique::where('id','=',$id)->first()){
           $caracterique = Caracterique::where('id','=',$id)->first();
          $nom = '';
          $valeur = '';
          $produit = '';
                
        $rules = [
            'nom'=>'string|min:2|required',
            'valeur'=>'string|min:2|max:255|required',
            'produit'=>'integer|min:1|required'
         ];

         $messages = [
             'nom.string'=>'Le nom doit etre une chaine charactère',
             'nom.min'=>'Le nom doit contenir au moins 2 charactères',
             'nom.max'=>'Le nom doit contenir au plus 70 charactèes',
             'nom.required'=>'Le nom  est obligatoire',
             'valeur.required'=>'La valeur est obligatoire',
             'valeur.string'=>'La valeur doit etre une chaine charactère',
             'valeur.min'=>'La valeur doit contenir au moins 2 charactères',
             'valeur.max'=>'La valeur doit contenir au plus 255 charactèes',
             'valeur.required'=>'La valeur est obligatoire',
             'produit.integer'=>'Le produit doit etre de type produit',
             'produit.min'=>'Le produit est invalide',
             'produit.max'=>'Le produit est invalide',
             'produit.required'=>'Le produit est obligatoire',
         ];

         $validator = Validator::make($request->all(), $rules,$messages);

         if ($validator->fails()) {
              return redirect('manager/caracterique/'.$id)->with('errors',$validator->errors());
              
         }
           $data = [
            'nom' => $request->nom, 
            'valeur' =>$request->valeur, 
            'produit' =>(integer) $request->produit, 
            'slug' =>str_slug($request->nom,'-')
           ];

           $_data = [
             'nom' => $caracterique->nom, 
            'valeur' =>$caracterique->valeur, 
            'produit' =>(integer) $caracterique->produit, 
            'slug' =>$caracterique->slug
           ];

           if($data['nom'] === $_data['nom']){
              $nom = $_data['nom'];
           }else{
               $nom = $data['nom'];
           }

           if($data['valeur'] === $_data['valeur']){
              $valeur = $_data['valeur'];
           }else{
               $valeur = $data['valeur'];
           }

           if($data['produit'] === $_data['produit']){
              $produit = $_data['produit'];
           }else{
               $produit = $data['produit'];
           }


           $updatable =$data = [
                'nom' => $nom, 
                'valeur' =>$valeur, 
                'produit' =>(integer) $produit, 
                'slug' =>$caracterique->slug
           ];

                   if ($caracterique->update($updatable)) {
                          return redirect('manager/caracteristique')->with('success', 'Caracterique mise à jours avec succès!');;
                   }
                  return redirect(route('caracterique.edit'))->with('error','erreur mise à jours Caracterique !');
             }
         return redirect('notfound')->with('error','Le caracterique que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
       if (Caracterique::where('id','=',$id)->first()){
             $caracterique = Caracterique::where('id','=',$id)->first();
             $caracterique->delete();
             return redirect(route('caracteritique.index'));
        }
        return redirect(route('caracteritique.index'));
        
    }

}
