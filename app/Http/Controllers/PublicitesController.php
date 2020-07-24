<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicites;
use App\PubsPositions;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Image;
use File;

class PublicitesController extends Controller
{
    //

     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pubs = Publicites::orderBy('id', 'desc')->paginate(30);
        return view('publicites.index', compact('pubs'));
    }


    public function create()
    {
        return view('publicites.create');
    }

    public function store(Request $request)
    {


        $rules = [
            'libelle'=>'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'position' => 'required|numeric',
        ];

        $messages = [
            'libelle.required'=>'Le libelle  est obligatoire',
            'date_debut.required' => 'La date de debut est obligatoire',
            'date_debut.date' => 'La date de debut n\'est pas valide',
            'date_fin.required' => 'La date de fin est obligatoire',
            'date_fin.date' => 'La date de fin n\'est pas valide',
            'position.required' => 'La position est obligatoire',
        ];
        //'type_publicite.required' => 'Veuillez choisir un type de publicite'

        $validator = Validator::make($request->all(), $rules,$messages);

        if ($validator->fails()) {
            //redirect('publicites.create')->with('errors',$validator->errors());
            return redirect()->back()->withInput()->withErrors($validator);
        }


        $data = [
            'libelle'=>$request->get('libelle'),
            'text1' => $request->get('text1'),
            'text3' => $request->get('text3'),
            'text4' => $request->get('text4'),
            'date_debut' => $request->get('date_debut'),
            'date_fin' => $request->get('date_fin'),
            'position' => $request->get('position'),
            'type_publicite' => $request->get('type_publicite'),
            'statut' => $request->get('statut')== null ? 1 : $request->get('statut'),
            'link' => $request->get('link')
        ];
        

        $validator = Validator::make($data, $rules,$messages);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
            //redirect('manager/publicites/create')->with('errors',$validator->errors());
        }
        if($request->hasFile('image')){
            $imgmake = Image::make($request->file('image')->getRealPath());
            $dimensions = PubsPositions::find($request->get('position'));
            if($imgmake->width()==$dimensions->taille_x && $imgmake->height()==$dimensions->taille_y){    
                $pubs = Publicites::create($data);
                if($pubs) {
                    $imgFile = $request->file('image');
                    $filename_new = time() . '.' . $imgFile->getClientOriginalExtension();
                    $path = $request->image->storeAs('pubs',$filename_new, 'public');
                    //update filename to database
                    $pubs->image = $filename_new;
                    $pubs->save();  
                    // Storage::disk('public')->put('pubs/', $fileContents);
                    return redirect('manager/publicites')->with('success', 'La publicite est créée avec succès!');
                }
                return redirect()->back()->withInput()->withErrors(['erreur enregistrement pub !']);
            }else{
                return redirect()->back()->withInput()->withErrors(['Veuillez choisir une image avec les dimensions indiquees. !']);
            }
        }else{
            return redirect()->back()->withInput()->withErrors(['Veuillez choisir une image. !']);

        }

    }


    public function show($id)
    {
        if (Publicites::where('id','=',$id)->first()){
            $pubs = Publicites::where('id','=',$id)->first();
            return view('publicites.show', compact('pubs'));
        }
        return redirect('notfound')->with('error','L\'element que vous cherchez n\'existe pas ou a été supprimé !');
    }

    public function edit($id)
    {
        if (Publicites::where('id','=',$id)->first()){
            $pubs = Publicites::where('id','=',$id)->first();
            return view('publicites.edit', compact('pubs'));
        }
        return redirect('notfound')->with('error','L\'element que vous cherchez n\'existe pas ou a été supprimé !');
    }


    public function update($id, Request $request)
    {
        $pro = Publicites::where('id','=',$id)->count();
        if ($pro){
            $pubs= Publicites::where('id','=',$id)->first();

            $rules = [
                'libelle'=>'required',
                'date_debut' => 'required|date',
                'date_fin' => 'required|date',
                'position' => 'required|numeric',
            ];
    
            $messages = [
                'libelle.required'=>'Le libelle  est obligatoire',
                'date_debut.required' => 'La date de debut est obligatoire',
                'date_debut.date' => 'La date de debut n\'est pas valide',
                'date_fin.required' => 'La date de fin est obligatoire',
                'date_fin.date' => 'La date de fin n\'est pas valide',
                'position.required' => 'La position est obligatoire',
            ];

        
            $data = [
                'libelle'=>$request->get('libelle'),
                'text1' => $request->get('text1'),
                'text3' => $request->get('text3'),
                'text4' => $request->get('text4'),
                'date_debut' => $request->get('date_debut'),
                'date_fin' => $request->get('date_fin'),
                'position' => $request->get('position'),
                'type_publicite' => $request->get('type_publicite'),
                'statut' => $request->get('statut')== null ? 1 : $request->get('statut'),
                'link' => $request->get('link')
            ];

            $validator = Validator::make($data, $rules,$messages);
            if ($validator->fails()) {
                redirect('manager/publicites/create')->with('errors',$validator->errors());
            }
            if($request->hasFile('image') || $pubs->image != null){
                $imgmake = null;
                if($request->hasFile('image'))
                    $imgmake = Image::make($request->file('image')->getRealPath());

                $dimensions = PubsPositions::find($request->get('position'));
              //  if(($pubs->image != null) || ($imgmake->width()==$dimensions->taille_x && $imgmake->height()==$dimensions->taille_y) ){    
                    if ($pubs->update($data)) {
                        //$filename  = public_path('uploads/pubs/').$pubs->image;
//                        if(File::exists($filename) && $request->hasFile('image')) {
                        if($request->hasFile('image')) {
                            //Found existing file then delete
                           // File::delete($filename);  // or unlink($filename);
                            $avatar = $request->file('image');
                        //    $filename_new = $pubs->image;
                            $filename_new = time() . '.' . $avatar->getClientOriginalExtension();

                            //update filename to database
                            $pubs->image = $filename_new;
                            $pubs->save();
                            $path = $request->image->storeAs('pubs',$pubs->image, 'public');

                            //move_uploaded_file($_FILES['image']['tmp_name'][$key], 'storage/' .$filename);
                        }
                    // Storage::disk('public')->put('pubs/', $fileContents);
                        return redirect('manager/publicites')->with('success', 'Publicites mise à jours avec succès!');;
                    }
                    return redirect()->back()->withInput()->withErrors(['erreur mise à jours Publicites!']);
              /*  }else{
                    return redirect()->back()->withInput()->withErrors(['Veuillez choisir une image avec les dimensions indiquees. !']);
        //            return redirect('manager/publicites/create')->withInput()->with('error','Veuillez choisir une image avec les dimensions indiquees. !');
                }*/
            }else{
                return redirect()->back()->withInput()->withErrors(['Veuillez choisir une image publicitaire!']);
            }
        }
        return redirect()->back()->withInput()->withErrors(['La Publicites que vous cherchez n\'existe pas ou a été supprimé !']);
    }

    public function destroy($id)
    {
        if (Publicites::where('id','=',$id)->first()){
            $pub = Publicites::where('id','=',$id)->first();
            $pub->delete();
            return redirect('publicites');
        }
        return redirect('publicites');
    }

    public function getPositionDimentions(Request $request){
        if($request->has('positionid')){
            $position = PubsPositions::find($request->get('positionid'));
            if($position){
                return response()->json(['res'=>true,'x'=>$position->taille_x,'y'=>$position->taille_y]);
            }else{
                return response()->json(['res'=>false]);
            }
        }else{
            return response()->json(['res'=>false]);
        }
    }



}
