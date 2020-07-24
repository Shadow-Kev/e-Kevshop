<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vente;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class VenteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $vente = Vente::orderBy('id', 'desc')->paginate(6);
        return view('vente.index', compact('vente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('vente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        $rules = [
         ];

         $messages = [
         ];

         $validator = Validator::make($request->all(), $rules,$messages);

         if ($validator->fails()) {
               redirect('vente.create')->with('errors',$validator->errors());
         }
           $data = [];
            if (Vente::create($data)) {
              return redirect('vente')->with('success', 'Vente ajouté avec succès!');;
            }

        return redirect('vente.create')->with('error','erreur enregistrement Vente !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     *
     * @return Response
     */
    public function show($slug)
    {
         if (Vente::where('slug','=',$slug)->first()){
             $vente = Vente::where('slug','=',$slug)->first();
             return view('vente.show', compact('vente'));
        }
        return redirect('notfound')->with('error','L\'item que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     *
     * @return Response
     */
    public function edit($slug)
    {
         if (Vente::where('slug','=',$slug)->first()){
                     $vente = Vente::where('slug','=',$slug)->first();
                   return view('vente.edit', compact('vente'));
                }
                return redirect('notfound')->with('error','L\'item que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $slug
     *
     * @return Response
     */
    public function update($slug, Request $request)
    {
          if (Vente::where('slug','=',$slug)->first()){
           $vente = Vente::where('slug','=',$slug)->first();

                $rules = [
                          ];

                $messages = [
                            ];

                  $validator = Validator::make($data, $rules,$messages);
                  if ($validator->fails()) {
                      redirect('vente.create')->with('errors',$validator->errors());
                     }
                   $data = [];

                   if ($vente->update($data)) {
                          return redirect('vente')->with('success', 'Vente mise à jours avec succès!');;
                   }
                  return redirect('vente.edit')->with('error','erreur mise à jours Vente !');
             }
         return redirect('notfound')->with('error','Le vente que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     *
     * @return Response
     */
    public function destroy($id)
    {
       if (Vente::where('id','=',$id)->first()){
             $vente = Vente::where('id','=',$id)->first();
             $vente->delete();
             return redirect('vente');
        }
        return redirect('vente');
    }

}
