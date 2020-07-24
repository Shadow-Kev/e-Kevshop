<?php

namespace App\Http\Controllers;

use App\CategoriePosts;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Validator;
use App\Media;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class CategoriePostController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categorie = CategoriePosts::orderBy('cat_libelle', 'asc')->paginate(15);
        return view('categoriepost.index', compact('categorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('categoriepost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

      $rules = [
            'cat_libelle'=>'string|required'
         ];

         $messages = [
             'cat_libelle.string'=>'Le libelle doit etre une chaine charactère',
             'cat_libelle.required'=>'Le libelle est obligatoire',
         ];

         $validator = Validator::make($request->all(), $rules,$messages);

         if ($validator->fails()) {
              return redirect()->back()->with('errors',$validator->errors())->withInput();
         }


        $data =  [
           'cat_libelle' => $request->cat_libelle, 
           'cat_status' => ($request->has('cat_status') ? 1 : 0 ),
        ];

        $cat = CategoriePosts::create($data);


        if ($cat) {
            if($request->hasFile('cat_image')){
                $token = name_generator('kadmarket-categorie-post-', 10);
                $path = file_manager()->filename('storage/' . $token, 'image');
                $filename = file_manager()->filename($token, 'image');
    
    
                $format = file_manager()->extension('image');
                $extention = [
                    'png', 'PNG', 'JPEG', 'jpeg', 'jpg', 'JPG'
                    ];

                if (!in_array($format, $extention)) {
                    $data_img = [
                        'nom' => $filename,
                        'description' => str_slug($filename, '-'),
                        'slug' => name_generator('image-categorie-post-',20),
                        'alt' => $filename,
                        'owner' => Auth::user()->id
                    ];
                    $m = Media::create($data_img);
                    if ($m) {
                        // file_manager()->store($path, 'image');
                        $cat->image = $path;
                        $cat->save();
                        $cover = $request->file('cat_image');
                        Storage::disk('public')->put($filename,  File::get($cover));
                        session()->flash('success', 'image ajouté avec succès ');
                        return redirect()->route('categoriePost.index')->with('success', 'categorie ajouté avec succès!');
                    }else{
                        return redirect()->route('categoriePost.create')->with('error', 'Erreur enregistrement fichier media!');
                    }
                }else{
                    return redirect()->route('categoriePost.create')->with('error', 'Format de fichier incorrect!');
                }
            }else{
                return redirect()->route('categoriePost.index')->with('success', 'categorie ajouté avec succès!');
            }
                
        }else{
            return redirect()->route('categoriePost.create')->with('error', 'erreur enregistrement Categorie !');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if (CategoriePosts::where('id', '=', $id)->first()) {
            $categorie = CategoriePosts::where('id', '=', $id)->first();
            return view('categoriepost.show', compact('categorie'));
        }
        return redirect('manager/notfound')->with('error', 'L\'item que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if (CategoriePosts::where('id', '=', $id)->first()) {
            $categorie = CategoriePosts::where('id', '=', $id)->first();
            return view('categoriepost.edit', compact('categorie'));
        }
        return redirect('manager/notfound')->with('error', 'L\'item que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {

        if (CategoriePosts::where('id', '=', $id)->first()) {
       
            $categorie = CategoriePosts::where('id', '=', $id)->first();

            $rules = [
                'cat_libelle'=>'string|required'
             ];
    
             $messages = [
                 'cat_libelle.string'=>'Le nom doit etre une chaine charactère',
                 'cat_libelle.required'=>'Le nom est obligatoire',
             ];
        
            $validator = Validator::make($request->all(), $rules,$messages);

          
         if ($validator->fails()) {
            return redirect()->back()->with('errors',$validator->errors())->withInput();
        }
         
       $data =  [
            'cat_libelle' => $request->cat_libelle, 
            'cat_status' => ($request->has('cat_status') ? 1 : 0 ),
        ];
     

            if ($categorie->update($data)) {
                return redirect()->route('categoriePost.index')->with('success', 'Categorie mise à jours avec succès !');;
            }
            return redirect()->back()->with('errors','erreur mise à jours Categorie !')->withInput();
        }
        return redirect('manager/notfound')->with('error', 'Le categorie que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $slug
     *
     * @return Response
     */
    public function destroy($id)
    {
        if (CategoriePosts::where('id', '=', $id)->first()) {
            $categorie = CategoriePosts::where('id', '=', $id)->first();
            $categorie->delete();
            return redirect('manager/categorie-post');
        }
        return redirect('manager/categorie-post');
    }
   
}
