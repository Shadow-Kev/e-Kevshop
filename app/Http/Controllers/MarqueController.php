<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Validator;
use App\Marque;

class MarqueController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $marque = Marque::orderBy('id', 'desc')->paginate(20);
        return view('marque.index', compact('marque'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('marque.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

          $rules = [
            'title'=>'string|min:2|max:70|required',
            'description'=>'string|min:2|max:255|required',
         ];

         $messages = [
             'title.string'=>'Le nom doit etre une chaine charactère',
             'title.min'=>'Le nom doit contenir au moins 2 charactères',
             'title.max'=>'Le nom doit contenir au plus 70 charactèes',
             'title.required'=>'Le nom  est obligatoire',
             'description.required'=>'La description est obligatoire',
             'description.string'=>'La description doit etre une chaine charactère',
             'description.min'=>'La description doit contenir au moins 2 charactères',
             'description.max'=>'La description doit contenir au plus 255 charactèes',
             
         ];

         $validator = Validator::make($request->all(), $rules,$messages);

         if ($validator->fails()) {
              return redirect('marque/create')->with('errors',$validator->errors());
              
         }
           $data = [
            'title' => $request->title, 
            'description' =>$request->description, 
            'slug' =>str_slug($request->nom,'-'),
            'displayOnSite' => ($request->displayOnSite ? 1 : 0 ),
            'displayOnMenu' => ($request->displayOnMenu ? 1 : 0 )
           ];
            if (Marque::create($data)) {
              return redirect('marque')->with('success', 'Marque ajoutée avec succès!');
            }

        return redirect('marque.create')->with('error','erreur enregistrement Marque !');
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
         if (Marque::where('id','=',$id)->first()){
             $marque = Marque::where('id','=',$id)->first();
             return view('marque.show', compact('marque'));
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
         if (Marque::where('id','=',$id)->first()){
                 $marque = Marque::where('id','=',$id)->first();
               return view('marque.edit', compact('marque'));
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
        if (Marque::where('id','=',$id)->first()){
           $marque = Marque::where('id','=',$id)->first();

          $rules = [
            'title'=>'string|min:2|max:70|required',
            'description'=>'string|min:2|max:255|required',
        ];

          $messages = [
             'title.string'=>'Le nom doit etre une chaine charactère',
             'title.min'=>'Le nom doit contenir au moins 2 charactères',
             'title.max'=>'Le nom doit contenir au plus 70 charactèes',
             'title.required'=>'Le nom  est obligatoire',
             'description.required'=>'La description est obligatoire',
             'description.string'=>'La description doit etre une chaine charactère',
             'description.min'=>'La description doit contenir au moins 2 charactères',
             'description.max'=>'La description doit contenir au plus 255 charactèes',
         ];
        


          $data = [
            'title' => $request->title, 
            'description' =>$request->description, 
            'displayOnSite' => ($request->has('displayOnSite') ? 1 : 0 ),
            'displayOnMenu' => ($request->has('displayOnMenu') ? 1 : 0 )
           ];

          $validator = Validator::make($data, $rules,$messages);

          if ($validator->fails()) {
              redirect('marque.create')->with('errors',$validator->errors());
          }


        if ($marque->update($data)) {
                  return redirect(route('marque.index'))->with('success', 'Marque mise à jours avec succès!');
           }
          return redirect('marque.edit')->with('error','erreur mise à jours Marque !');
         }

         return redirect('notfound')->with('error','Le marque que vous cherchez n\'existe pas ou a été supprimé !');
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
       if (Marque::where('id','=',$id)->first()){
             $marque = Marque::where('id','=',$id)->first();
             $marque->delete();
             return redirect('marque');
        }
        return redirect('marque');
    }

}
