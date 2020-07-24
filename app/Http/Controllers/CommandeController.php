<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Commande;
use App\ModePaiement;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CommandeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $commande = Commande::orderBy('id', 'desc')->paginate(20);
        return view('commande.index', compact('commande'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('commande.create');
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
               redirect('commande.create')->with('errors',$validator->errors());
         }
           $data = [];
            if (Commande::create($data)) {
              return redirect('commande')->with('success', 'Commande ajouté avec succès!');;
            }

        return redirect('commande.create')->with('error','erreur enregistrement Commande !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     *
     * @return
     */
    public function show($slug)
    {

         if (Commande::where('slug','=',$slug)->first()){
             $commande = Commande::where('slug','=',$slug)->first();
             return view('commande.show', compact('commande'));
        }
        return redirect('notfound')->with('error','La commande que vous cherchez n\'existe pas ou a été supprimée !');
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
         if (Commande::where('slug','=',$slug)->first()){
                     $commande = Commande::where('slug','=',$slug)->first();
                   return view('commande.edit', compact('commande'));
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
          if (Commande::where('slug','=',$slug)->first()){
           $commande = Commande::where('slug','=',$slug)->first();

                $rules = [
                          ];

                $messages = [
                            ];

                  $validator = Validator::make($data, $rules,$messages);
                  if ($validator->fails()) {
                      redirect('commande.create')->with('errors',$validator->errors());
                     }
                   $data = [];

                   if ($commande->update($data)) {
                          return redirect('commande')->with('success', 'Commande mise à jours avec succès!');;
                   }
                  return redirect('commande.edit')->with('error','erreur mise à jours Commande !');
             }
         return redirect('notfound')->with('error','Le commande que vous cherchez n\'existe pas ou a été supprimé !');
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
       if (Commande::where('id','=',$id)->first()){
             $commande = Commande::where('id','=',$id)->first();
             $commande->delete();
             return redirect('commande');
        }
        return redirect('commande');
    }

}
