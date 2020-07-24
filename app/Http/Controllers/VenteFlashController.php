<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Produit;
use App\VenteFlash;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Session;

class VenteFlashController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $venteflash = VenteFlash::orderBy('id', 'desc')->paginate(6);
        return view('venteflash.index', compact('venteflash'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('venteflash.create');
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
               redirect('venteflash.create')->with('errors',$validator->errors());
         }
           $data = $request->all();
            if (VenteFlash::create($data)) {
              return redirect('venteflash')->with('success', 'VenteFlash ajouté avec succès!');;
            }

        return redirect('venteflash.create')->with('error','erreur enregistrement VenteFlash !');
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
         if (VenteFlash::where('id','=',$id)->first()){
             $venteflash = VenteFlash::where('id','=',$id)->first();
             return view('venteflash.show', compact('venteflash'));
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
         if (VenteFlash::where('id','=',$id)->first()){
                     $venteflash = VenteFlash::where('id','=',$id)->first();
                   return view('venteflash.edit', compact('venteflash'));
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
          if (VenteFlash::where('id','=',$id)->first()){
           $venteflash = VenteFlash::where('id','=',$id)->first();

                $rules = [
                          ];

                $messages = [
                            ];

                $data = $request->all();

                  $validator = Validator::make($data, $rules,$messages);
                  if ($validator->fails()) {
                      redirect('venteflash.create')->with('errors',$validator->errors());
                     }

                   if ($venteflash->update($data)) {
                          return redirect('venteflash')->with('success', 'VenteFlash mise à jours avec succès!');;
                   }
                  return redirect('venteflash.edit')->with('error','erreur mise à jours VenteFlash !');
             }
         return redirect('notfound')->with('error','Le venteflash que vous cherchez n\'existe pas ou a été supprimé !');
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
             return redirect('venteflash')->with('success','venteflash supprimé avec succès');
        }
        return redirect('venteflash')->with('success','Echec suppression');
    }

}
