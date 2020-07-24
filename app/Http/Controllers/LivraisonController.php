<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Livraison;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class LivraisonController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $livraison = Livraison::orderBy('id', 'desc')->paginate(6);
        return view('livraison.index', compact('livraison'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('livraison.create');
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
               redirect('livraison.create')->with('errors',$validator->errors());
         }
           $data = [];
            if (Livraison::create($data)) {
              return redirect('livraison')->with('success', 'Livraison ajouté avec succès!');;
            }

        return redirect('livraison.create')->with('error','erreur enregistrement Livraison !');
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
         if (Livraison::where('slug','=',$slug)->first()){
             $livraison = Livraison::where('slug','=',$slug)->first();
             return view('livraison.show', compact('livraison'));
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
         if (Livraison::where('slug','=',$slug)->first()){
                     $livraison = Livraison::where('slug','=',$slug)->first();
                   return view('livraison.edit', compact('livraison'));
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
          if (Livraison::where('slug','=',$slug)->first()){
           $livraison = Livraison::where('slug','=',$slug)->first();

                $rules = [
                          ];

                $messages = [
                            ];

                  $validator = Validator::make($data, $rules,$messages);
                  if ($validator->fails()) {
                      redirect('livraison.create')->with('errors',$validator->errors());
                     }
                   $data = [];

                   if ($livraison->update($data)) {
                          return redirect('livraison')->with('success', 'Livraison mise à jours avec succès!');;
                   }
                  return redirect('livraison.edit')->with('error','erreur mise à jours Livraison !');
             }
         return redirect('notfound')->with('error','Le livraison que vous cherchez n\'existe pas ou a été supprimé !');
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
       if (Livraison::where('id','=',$id)->first()){
             $livraison = Livraison::where('id','=',$id)->first();
             $livraison->delete();
             return redirect('livraison');
        }
        return redirect('livraison');
    }

}
