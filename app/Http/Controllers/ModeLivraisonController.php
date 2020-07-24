<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ModeLivraison;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ModeLivraisonController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $modelivraison = ModeLivraison::orderBy('id', 'desc')->paginate(6);
        return view('modelivraison.index', compact('modelivraison'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('modelivraison.create');
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
               redirect('modelivraison.create')->with('errors',$validator->errors());
         }
           $data = [];
            if (ModeLivraison::create($data)) {
              return redirect('modelivraison')->with('success', 'ModeLivraison ajouté avec succès!');;
            }

        return redirect('modelivraison.create')->with('error','erreur enregistrement ModeLivraison !');
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
         if (ModeLivraison::where('slug','=',$slug)->first()){
             $modelivraison = ModeLivraison::where('slug','=',$slug)->first();
             return view('modelivraison.show', compact('modelivraison'));
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
         if (ModeLivraison::where('slug','=',$slug)->first()){
                     $modelivraison = ModeLivraison::where('slug','=',$slug)->first();
                   return view('modelivraison.edit', compact('modelivraison'));
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
          if (ModeLivraison::where('slug','=',$slug)->first()){
           $modelivraison = ModeLivraison::where('slug','=',$slug)->first();

                $rules = [
                          ];

                $messages = [
                            ];

                  $validator = Validator::make($data, $rules,$messages);
                  if ($validator->fails()) {
                      redirect('modelivraison.create')->with('errors',$validator->errors());
                     }
                   $data = [];

                   if ($modelivraison->update($data)) {
                          return redirect('modelivraison')->with('success', 'ModeLivraison mise à jours avec succès!');;
                   }
                  return redirect('modelivraison.edit')->with('error','erreur mise à jours ModeLivraison !');
             }
         return redirect('notfound')->with('error','Le modelivraison que vous cherchez n\'existe pas ou a été supprimé !');
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
       if (ModeLivraison::where('id','=',$id)->first()){
             $modelivraison = ModeLivraison::where('id','=',$id)->first();
             $modelivraison->delete();
             return redirect('modelivraison');
        }
        return redirect('modelivraison');
    }

}
