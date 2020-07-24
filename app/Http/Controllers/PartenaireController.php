<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partenaire;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Image;
use File;

class PartenaireController extends Controller
{
    //

 /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $parts = Partenaire::orderBy('id', 'desc')->paginate(10);
        return view('partenaires.index', compact('parts'));
    }

    public function create()
    {
        return view('partenaires.create');
    }

    public function store(Request $request)
    {


        $rules = [
            'nom_partenaire'=>'required',
            'contact_partenaire' => 'required'
        ];

        $messages = [
            'nom_partenaire.required'=>'Le nom du partenaire est obligatoire',
            'contact_partenaire.required' => 'Le contact du partenaire est obligatoire'
        ];
        //'type_publicite.required' => 'Veuillez choisir un type de publicite'

      
        $data = [
            'nom_partenaire'=>$request->get('nom_partenaire'),
            'contact_partenaire' => $request->get('contact_partenaire'),
            'url_partenaire' => $request->get('url_partenaire'),
            'statut' => $request->get('statut')== null ? 0 : 1,
            'adresse' => $request->get('adresse')
        ];

        $validator = Validator::make($data, $rules,$messages);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }


        if($request->hasFile('image_partenaire')){
            $imgmake = Image::make($request->file('image_partenaire')->getRealPath());
            //if($imgmake->width()==250 && $imgmake->height()==250){    
                $pubs = Partenaire::create($data);
                if($pubs) {
                    $imgFile = $request->file('image_partenaire');
                    $filename_new = time() . '.' . $imgFile->getClientOriginalExtension();
                    $path = $request->image_partenaire->storeAs('partenaires',$filename_new, 'public');
                    //update filename to database
                    $pubs->image_partenaire = $filename_new;
                    $pubs->save();  
                    // Storage::disk('public')->put('pubs/', $fileContents);
                    return redirect('manager/partners')->with('success', 'Le partenaire est créée avec succès!');
                }
                return redirect()->back()->withInput()->withErrors(['erreur enregistrement partenaire !']);
            // }else{
            //     return redirect()->back()->withInput()->withErrors(['Veuillez choisir une image avec les dimensions indiquees. !']);
            // }
        }else{
            return redirect()->back()->withInput()->withErrors(['Veuillez choisir une image. !']);

        }

    }

    
    public function show($id)
    {
        if (Partenaire::where('id','=',$id)->first()){
            $parts = Partenaire::where('id','=',$id)->first();
            return view('partenaires.show', compact('parts'));
        }
        return redirect('notfound')->with('error','L\'element que vous cherchez n\'existe pas ou a été supprimé !');
    }

    public function edit($id)
    {
        if (Partenaire::where('id','=',$id)->first()){
            $parts = Partenaire::where('id','=',$id)->first();
            return view('partenaires.edit', compact('parts'));
        }
        return redirect('notfound')->with('error','L\'element que vous cherchez n\'existe pas ou a été supprimé !');
    }


    public function update($id, Request $request)
    {
        $pro = Partenaire::where('id','=',$id)->count();
        if ($pro){
            $pubs= Partenaire::where('id','=',$id)->first();
            $rules = [
                'nom_partenaire'=>'required',
                'contact_partenaire' => 'required'
            ];
    
            $messages = [
                'nom_partenaire.required'=>'Le nom du partenaire est obligatoire',
                'contact_partenaire.required' => 'Le contact du partenaire est obligatoire'
            ];
            //'type_publicite.required' => 'Veuillez choisir un type de publicite'
    
          
            $data = [
                'nom_partenaire'=>$request->get('nom_partenaire'),
                'contact_partenaire' => $request->get('contact_partenaire'),
                'url_partenaire' => $request->get('url_partenaire'),
                'statut' => $request->get('statut')== null ? 0 : 1,
                'adresse' => $request->get('adresse'),
            ];
    
            $validator = Validator::make($data, $rules,$messages);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

          
            $imgmake = null;
            $new_image = '';
            if($request->hasFile('image_partenaire')){
                $imgmake = Image::make($request->file('image_partenaire')->getRealPath());
                if($request->hasFile('image_partenaire')) {
                    //Found existing file then delete
                    $filename  = url('storage/uploads/partenaires/').$pubs->image_partenaire;
                    if(File::exists($filename) && $request->hasFile('image_partenaire')) {
                        File::delete($filename);  // or unlink($filename);
                        $avatar = $request->file('image_partenaire');
                        $filename_new = time() . '.' . $avatar->getClientOriginalExtension();

                        //update filename to database
                        $pubs->image_partenaire = $filename_new;
                        $pubs->save();
                        $path = $request->image_partenaire->storeAs('partenaires',$pubs->image_partenaire, 'public');
                        if($path)
                            $data['image_partenaire'] = $path;
                    }
                }
            }
            if ($pubs->update($data)) {
                return redirect('manager/partners')->with('success', 'Partenaire mise à jours avec succès!');;
            }
            return redirect()->back()->withInput()->withErrors(['erreur mise à jours du partenaire!']);
        }
        return redirect()->back()->withInput()->withErrors(['Le partenaire que vous cherchez n\'existe pas ou a été supprimé !']);
    }

    public function destroy($id)
    {
        if (Partenaire::where('id','=',$id)->first()){
            $pub = Partenaire::where('id','=',$id)->delete();
            return redirect(route('partenaires.index'));
        }
        return redirect(route('partenaires.index'));
    }

  
}
