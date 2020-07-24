<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Shop;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

use App\Media;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ShopController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $shop = Shop::orderBy('id', 'desc')->paginate(6);
        return view('shop.index', compact('shop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('shop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        $rules = [
            'nom'=>'string|min:2|max:70|required',
            'email'=>'string|email|unique:shops',
            'description'=>'string|min:2',
         ];

         $messages = [
             'nom.string'=>'Le nom doit etre une chaine charactère',
             'nom.min'=>'Le nom doit contenir au moins 2 charactères',
             'nom.max'=>'Le nom doit contenir au plus 70 charactèes',
             'nom.required'=>'Le nom  est obligatoire',
             'email.string'=>'Le mail doit etre une chaine charactère',
             'email.email'=>'Entrez une adresse email valide',
             'email.unique' =>'L\'adresse email que vous avez saisie est déja prise',
             'description.string'=>'La description doit etre une chaine charactère',
             'description.min'=>'La description doit contenir au moins 2 charactères',
         ];

         $validator = Validator::make($request->all(), $rules,$messages);

         if ($validator->fails()) {
              return redirect('shop/create')->with('errors',$validator->errors());
         }
            $token = name_generator('kadmarket', 10);
            $filename = "";
            if(file_exists(file_manager()->filename($token, 'logo'))){
              $filename = file_manager()->filename($token, 'logo');
            }

           $data =[
               'nom' => $request->nom, 
               'telephone' => $request->telephone, 
               'email' => $request->email, 
               'adresse' => $request->adresse, 
               'logo' => $filename, 
               'benefice' => $request->benefice, 
               'description' => $request->description, 
               'slug' => name_generator('shop',10)
            ];

            if (Shop::create($data) && file_exists(file_manager()->filename($token, 'logo'))) {
               $format = file_manager()->extension('logo');
               $extention = [
                  'png', 'PNG', 'JPEG', 'jpeg', 'jpg', 'JPG'
                ];

                if (!in_array($format, $extention)) {
                    $data_img = [
                        'nom' => $filename,
                        'description' => str_slug($filename, '-'),
                        'alt' => $filename,
                        'slug' => name_generator('image-shop',10),
                        'owner' => Auth::user()->id
                    ];

                    if (Media::create($data_img)) {
                      $cover = $request->file('logo');
                      Storage::disk('public')->put($filename,  File::get($cover));               
                      return redirect('shop')->with('success', 'Shop ajouté avec succès!');
                    }
                    return redirect('shop.create')->with('error', 'Erreur enregistrement fichier media!');

                  } 
                return redirect('shop')->with('success', 'Shop ajouté avec succès!');
              }
        return redirect('shop.create')->with('error','erreur enregistrement Shop !');
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
         if (Shop::where('id','=',$id)->first()){
             $shop = Shop::where('id','=',$id)->first();
             return view('shop.show', compact('shop'));
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
         if (Shop::where('id','=',$id)->first()){
                     $shop = Shop::where('id','=',$id)->first();
                   return view('shop.edit', compact('shop'));
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
          if (Shop::where('id','=',$id)->first()){
           $shop = Shop::where('id','=',$id)->first();
                         $nom= ''; 
                         $telephone= ''; 
                         $email= ''; 
                         $adresse= ''; 
                         $logo= ''; 
                         $benefice= ''; 
                         $description= '';


                   $data = [
                        'nom' => $request->nom, 
                        'telephone' => $request->telephone, 
                        'email' => $request->email, 
                        'adresse' => $request->adresse, 
                        'logo' => $request->file('logo'), 
                        'benefice' => $request->benefice, 
                        'description' => $request->description, 
                   ];


                   $_data = [
                       'nom' => $shop->nom, 
                        'telephone' => $shop->telephone, 
                        'email' => $shop->email, 
                        'adresse' => $shop->adresse, 
                        'logo' => $shop->logo, 
                        'benefice' => $shop->benefice, 
                        'description' => $shop->description,
                        'slug' => $shop->slug 
                   ];

                
                   if($data['nom'] === $_data['nom']){
                           $nom = $_data['nom'];
                      }else{
                           $nom = $data['nom'];
                      }

                       if($data['telephone'] === $_data['telephone']){
                           $telephone = $_data['telephone'];
                      }else{
                           $telephone = $data['telephone'];
                      }

                       if($data['email'] === $_data['email']){
                           $email = $_data['email'];
                      }else{
                           $email = $data['email'];
                      }

                        if($data['adresse'] === $_data['adresse']){
                           $adresse = $_data['adresse'];
                      }else{
                           $adresse = $data['adresse'];
                      }


                       if($data['logo'] === $_data['logo']){
                           $logo = $_data['logo'];
                      }else{
                           $logo = $data['logo'];
                      }

                     if($data['benefice'] === $_data['benefice']){
                           $benefice = $_data['benefice'];
                      }else{
                           $benefice = $data['benefice'];
                      }

                       if($data['description'] === $_data['description']){
                           $description = $_data['description'];
                      }else{
                           $description = $data['description'];
                      }

                    $updatable = [
                        'nom' => $nom, 
                        'telephone' => $telephone, 
                        'email' => $email, 
                        'adresse' => $adresse, 
                        'logo' => $logo, 
                        'benefice' => $benefice, 
                        'description' => $description,
                        'slug' => $shop->slug 
                    ];

                   if ($shop->update($updatable)) {
                          return redirect('shop')->with('success', 'Shop mise à jours avec succès!');;
                   }
                  return redirect('shop.edit')->with('error','erreur mise à jours Shop !');
             }
         return redirect('notfound')->with('error','Le shop que vous cherchez n\'existe pas ou a été supprimé !');
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
       if (Shop::where('id','=',$id)->first()){
             $shop = Shop::where('id','=',$id)->first();
             $shop->delete();
             return redirect('shop');
        }
        return redirect('shop');
    }

}
