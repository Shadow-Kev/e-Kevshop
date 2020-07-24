<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Paiement;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PaiementController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $paiement = Paiement::orderBy('id', 'desc')->paginate(6);
        return view('paiement.index', compact('paiement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('paiement.create');
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
               redirect('paiement.create')->with('errors',$validator->errors());
         }
           $data = [];
            if (Paiement::create($data)) {
              return redirect('paiement')->with('success', 'Paiement ajouté avec succès!');;
            }

        return redirect('paiement.create')->with('error','erreur enregistrement Paiement !');
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
         if (Paiement::where('slug','=',$slug)->first()){
             $paiement = Paiement::where('slug','=',$slug)->first();
             return view('paiement.show', compact('paiement'));
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
         if (Paiement::where('slug','=',$slug)->first()){
                     $paiement = Paiement::where('slug','=',$slug)->first();
                   return view('paiement.edit', compact('paiement'));
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
          if (Paiement::where('slug','=',$slug)->first()){
           $paiement = Paiement::where('slug','=',$slug)->first();

                $rules = [
                          ];

                $messages = [
                            ];

                  $validator = Validator::make($data, $rules,$messages);
                  if ($validator->fails()) {
                      redirect('paiement.create')->with('errors',$validator->errors());
                     }
                   $data = [];

                   if ($paiement->update($data)) {
                          return redirect('paiement')->with('success', 'Paiement mise à jours avec succès!');;
                   }
                  return redirect('paiement.edit')->with('error','erreur mise à jours Paiement !');
             }
         return redirect('notfound')->with('error','Le paiement que vous cherchez n\'existe pas ou a été supprimé !');
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
       if (Paiement::where('id','=',$id)->first()){
             $paiement = Paiement::where('id','=',$id)->first();
             $paiement->delete();
             return redirect('paiement');
        }
        return redirect('paiement');
    }

}
