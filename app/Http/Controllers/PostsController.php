<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CategoriePosts;
use App\Marque;
use App\Http\Controllers\SettingsController;
use App\Media;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Session;
use App\PubsPositions;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Image;
use File;

class PostsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    protected $article_position_ID = 7;
    public function index(Request $request)
    {
        $posts = Posts::orderBy('id', 'desc')->paginate(200);        
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts._create', compact('marques', 'categories'));
    }


    /** Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $settinCtrl = new SettingsController();
        $settings = $settinCtrl->getSettingsMap();
        $data = [
            'post_title' => $request->post_title,
            'post_content' => $request->post_content,
            'post_cat_id' => $request->post_cat_id,
            'post_status' => ($request->has('post_status') ? 1 : 0 ),
            'publication_date' => $request->publication_date,
            'slug' => Str::slug($request->post_title, '-')
        ];

        $rules = [
            'post_title' => 'string|required',
            'post_content' => 'required',
            'post_cat_id' => 'required',
            'publication_date' => 'date|required'
        ];

        $messages = [
            'post_title.string' => 'Le titre doit etre une chaine charactère',
            'post_title.required' => 'Le titre est obligatoire',
            'post_content.required' => 'Le contenu de l\'article est obligatoire',
            'post_cat_id.required' => 'Veuillez selectionner une categorie ',
            'publication_date.required' => 'Veuillez indiquer la date de publication ',
        ];

        
        $validator = Validator::make($data, $rules, $messages);
        
        
        if ($validator->fails()) {
            return redirect()->back()->with('errors', $validator->errors())->withInput();
            
        }

    
          

        if($request->hasFile('image')){
            $imgmake = Image::make($request->file('image')->getRealPath());
            $dimensions = PubsPositions::find($this->article_position_ID = 7);
            if($imgmake->width()==$dimensions->taille_x && $imgmake->height()==$dimensions->taille_y){    
                $post = Posts::create($data);
                if($post) {
                    $imgFile = $request->file('image');
                    $filename_new = time() . '.' . $imgFile->getClientOriginalExtension();
                    $path = $request->image->storeAs('articles',$filename_new, 'public');
                    //update filename to database
                    $post->post_image = $filename_new;
                    $post->save();  
                    // Storage::disk('public')->put('pubs/', $fileContents);
                    return redirect('manager/posts')->with('success', 'Article créé avec succès!');;
                }
                return redirect()->back()->withInput()->withErrors(['erreur enregistrement article !']);
            }else{
                return redirect()->back()->withInput()->withErrors(['Veuillez choisir une image avec les dimensions indiquees. !']);
            }
        }else{
            $newPost = Posts::create($data);
            if ($newPost) {

                return redirect('manager/posts')->with('success', 'Article créé avec succès!');;
            }

        }
        

        return redirect()->route('posts.create')->with('error', 'erreur enregistrement article !');
    }

    /**
     * Display the specified resource.
     *
     * @param int $slug
     *
     * @return Response
     */
    public function show($id)
    {
        if (Posts::where('id', '=', $id)->first()) {
            $posts = Posts::where('id', '=', $id)->first();
          return view('posts.show', compact('posts'));

        //    return response()->json(['data'=>$produit]);
        }
      return redirect('notfound')->with('error', 'L\'article que vous cherchez n\'existe pas ou a été supprimé !');
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
        if (Posts::where('id', '=', $id)->first()) {
            $produit = Posts::where('id', '=', $id)->first();
            return view('posts.edit', compact('produit'));
        }
        return redirect('notfound')->with('error', 'L\'article que vous cherchez n\'existe pas ou a été supprimé !');
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
        if (Posts::where('id', '=', $id)->first()) {
            $produit = Posts::where('id', '=', $id)->first();
          
            $data = [
                'post_title' => $request->post_title,
                'post_content' => $request->post_content,
                'post_cat_id' => $request->post_cat_id,
                'post_status' => ($request->has('post_status') ? 1 : 0 ),
                'publication_date' => $request->publication_date,
                'slug' => Str::slug($request->post_title, '-')
            ];


            $rules = [
                'post_title' => 'string|required',
                'post_content' => 'required',
                'post_cat_id' => 'required|integer',
                'publication_date' => 'date|required'
            ];

            $messages = [
                'post_title.string' => 'Le titre doit etre une chaine charactère',
                'post_title.required' => 'Le titre est obligatoire',
                'post_content.required' => 'Le contenu de l\'article est obligatoire',
                'post_cat_id.required' => 'Veuillez selectionner une categorie ',
                'publication_date.required' => 'Veuillez indiquer la date de publication ',
            ];
            
            $validator = Validator::make($data, $rules, $messages);
            if ($validator->fails()) {
                redirect()->route('posts.create')->with('errors', $validator->errors());
            }


            if($request->hasFile('image')){
                $imgmake = Image::make($request->file('image')->getRealPath());
                $dimensions = PubsPositions::find($this->article_position_ID = 7);
                if($imgmake->width()==$dimensions->taille_x && $imgmake->height()==$dimensions->taille_y){    
                    $post = Posts::create($data);
                    if($post) {
                        $imgFile = $request->file('image');
                        $filename_new = time() . '.' . $imgFile->getClientOriginalExtension();
                        $path = $request->image->storeAs('articles',$filename_new, 'public');
                        //update filename to database
                        $post->post_image = $filename_new;
                        $post->save();  
                        // Storage::disk('public')->put('pubs/', $fileContents);
                        return redirect('manager/posts')->with('success', 'Article créé avec succès!');;
                    }
                    return redirect()->back()->withInput()->withErrors(['erreur enregistrement article !']);
                }else{
                    return redirect()->back()->withInput()->withErrors(['Veuillez choisir une image avec les dimensions indiquees. !']);
                }
            }else{
                if ($produit->update($data)) {
                    return redirect()->route('posts.index')->with('success', 'Article mise à jours avec succès!');;
                }
                return redirect()->route('posts.edit')->with('error', 'erreur mise à jours Article !');
            }
        
          
           
        }
        return redirect('notfound')->with('error', 'Le article que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        if (Posts::where('id', '=', $id)->first()) {
            $article = Posts::where('id', '=', $id)->first();
            $article->delete();
            return redirect()->route('posts.index');
        }
        return redirect()->route('posts.index');
    }
}
