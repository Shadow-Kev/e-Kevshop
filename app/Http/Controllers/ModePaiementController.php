<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ModePaiement;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ModePaiementController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $modepaiement = ModePaiement::orderBy('id', 'desc')->paginate(6);
        return view('modepaiement.index', compact('modepaiement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('modepaiement.create');
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
               redirect('modepaiement.create')->with('errors',$validator->errors());
         }
           $data = [];
            if (ModePaiement::create($data)) {
              return redirect('modepaiement')->with('success', 'ModePaiement ajouté avec succès!');;
            }

        return redirect('modepaiement.create')->with('error','erreur enregistrement ModePaiement !');
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
         if (ModePaiement::where('slug','=',$slug)->first()){
             $modepaiement = ModePaiement::where('slug','=',$slug)->first();
             return view('modepaiement.show', compact('modepaiement'));
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
         if (ModePaiement::where('slug','=',$slug)->first()){
                     $modepaiement = ModePaiement::where('slug','=',$slug)->first();
                   return view('modepaiement.edit', compact('modepaiement'));
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
          if (ModePaiement::where('slug','=',$slug)->first()){
           $modepaiement = ModePaiement::where('slug','=',$slug)->first();

                $rules = [
                          ];

                $messages = [
                            ];

                  $validator = Validator::make($data, $rules,$messages);
                  if ($validator->fails()) {
                      redirect('modepaiement.create')->with('errors',$validator->errors());
                     }
                   $data = [];

                   if ($modepaiement->update($data)) {
                          return redirect('modepaiement')->with('success', 'ModePaiement mise à jours avec succès!');;
                   }
                  return redirect('modepaiement.edit')->with('error','erreur mise à jours ModePaiement !');
             }
         return redirect('notfound')->with('error','Le modepaiement que vous cherchez n\'existe pas ou a été supprimé !');
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
       if (ModePaiement::where('id','=',$id)->first()){
             $modepaiement = ModePaiement::where('id','=',$id)->first();
             $modepaiement->delete();
             return redirect('modepaiement');
        }
        return redirect('modepaiement');
    }

}
