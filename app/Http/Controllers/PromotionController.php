<?php

namespace App\Http\Controllers;

use App\Promotion;
use App\Produit;
use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Session;

class PromotionController extends Controller
{
    //


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $promos = Promotion::orderBy('id', 'desc')->paginate(6);
        return view('promotion.index', compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('promotion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        $rules = [
            'produit'=>'required|numeric',
            'categorie'=>'numeric',
            'vieux_prix' => 'required|numeric',
            'prix' => 'required|date',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'pourcentage' => 'required|numeric'
        ];

        $messages = [
            'produit.required'=>'Le produit  est obligatoire',
            'produit.numeric'=>'Le produit  est obligatoire',
            'categorie.numeric'=>'La categorie est invalide',
            'vieux_prix.required' => 'Le vieux prix est obligatoire',
            'vieux_prix.numeric' => 'Le vieux prix doit etre numeric',
            'prix.required' => 'Le prix est obligatoire',
            'prix.numeric' => 'Le prix doit etre numeric',
            'date_debut.required' => 'La date de debut est obligatoire',
            'date_debut.date' => 'La date de debut n\'est pas valide',
            'date_fin.required' => 'La date de fin est obligatoire',
            'date_fin.date' => 'La date de fin n\'est pas valide',
            'pourcentage.required' => 'Le prix est obligatoire',
            'pourcentage.numeric' => 'Le prix doit etre numeric'
        ];

        $validator = Validator::make($request->all(), $rules,$messages);

        if ($validator->fails()) {
            redirect('promotion.create')->with('errors',$validator->errors());
        }
        $data = $request->all();
        $produit = Produit::find($request->get('produit'));
        $data['vieux_prix'] = $produit->prix;
        if (Promotion::create($data)) {
            return redirect(route('promotion.index'))->with('success', 'promotion ajouté avec succès!');;
        }

        return redirect('promotion.create')->with('error','erreur enregistrement promotion !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */

    public function show($id)
    {
        if (Promotion::where('id','=',$id)->first()){
            $promos = Promotion::where('id','=',$id)->first();
            return view('promotion.show', compact('promos'));
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
        if (Promotion::where('id','=',$id)->first()){
            $promos = Promotion::where('id','=',$id)->first();
            return view('promotion.edit', compact('promos'));
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
        $pro = Promotion::where('id','=',$id)->count();
        if ($pro){
            $promo= Promotion::where('id','=',$id)->first();

           $rules = [
            'produit'=>'required|numeric',
            'categorie'=>'numeric',
            'vieux_prix' => 'required|numeric',
            'prix' => 'required|date',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'pourcentage' => 'required|numeric'
        ];

        $messages = [
            'produit.required'=>'Le produit  est obligatoire',
            'produit.numeric'=>'Le produit  est obligatoire',
            'categorie.numeric'=>'La categorie est invalide',
            'vieux_prix.required' => 'Le vieux prix est obligatoire',
            'vieux_prix.numeric' => 'Le vieux prix doit etre numeric',
            'prix.required' => 'Le prix est obligatoire',
            'prix.numeric' => 'Le prix doit etre numeric',
            'date_debut.required' => 'La date de debut est obligatoire',
            'date_debut.date' => 'La date de debut n\'est pas valide',
            'date_fin.required' => 'La date de fin est obligatoire',
            'date_fin.date' => 'La date de fin n\'est pas valide',
            'pourcentage.required' => 'Le prix est obligatoire',
            'pourcentage.numeric' => 'Le prix doit etre numeric'
        ];

            $data = $request->all();

            $validator = Validator::make($data, $rules,$messages);
            if ($validator->fails()) {
                redirect('promotion.create')->with('errors',$validator->errors());
            }

            if ($promo->update($data)) {
                return redirect(route('promotion.index'))->with('success', 'Promotion mise à jours avec succès!');;
            }
            return redirect('promotion.edit')->with('error','erreur mise à jours promotion!');
        }
        return redirect('notfound')->with('error','La promotion que vous cherchez n\'existe pas ou a été supprimé !');
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
        if (VenteFlash::where('id','=',$id)->first()){
            $venteflash = VenteFlash::where('id','=',$id)->first();
            $venteflash->delete();
            return redirect('promotion.index');
        }
        return redirect('promotion.index');
    }
}
