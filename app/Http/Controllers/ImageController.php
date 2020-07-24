<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Media;
use App\Produit;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ImageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $images = Media::orderBy('id','desc')->paginate(10);
        $produit = Produit::orderBy('id', 'desc')->paginate(10);
        return view('image.index', compact('images','produit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('image.create');
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
               redirect('image.create')->with('errors',$validator->errors());
         }
           $data = [];
            if (Image::create($data)) {
              return redirect('image')->with('success', 'Image ajouté avec succès!');;
            }

        return redirect('image.create')->with('error','erreur enregistrement Image !');
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
         if (Image::where('slug','=',$slug)->first()){
             $image = Image::where('slug','=',$slug)->first();
             return view('image.show', compact('image'));
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
         if (Image::where('slug','=',$slug)->first()){
                     $image = Image::where('slug','=',$slug)->first();
                   return view('image.edit', compact('image'));
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
          if (Image::where('slug','=',$slug)->first()){
           $image = Image::where('slug','=',$slug)->first();

                $rules = [
                          ];

                $messages = [
                            ];

                  $validator = Validator::make($data, $rules,$messages);
                  if ($validator->fails()) {
                      redirect('image.create')->with('errors',$validator->errors());
                     }
                   $data = [];

                   if ($image->update($data)) {
                          return redirect('image')->with('success', 'Image mise à jours avec succès!');;
                   }
                  return redirect('image.edit')->with('error','erreur mise à jours Image !');
             }
         return redirect('notfound')->with('error','Le image que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     *
     * @return Response
     */
    public function destroy($slug)
    {
       if (Image::where('slug','=',$slug)->first()){
             $image = Image::where('slug','=',$slug)->first();
             $image->delete();
             return redirect('image')->with('success','image supprimé avec succès');
        }
        return redirect('image')->with('success','Echec suppression image');
    }

}
