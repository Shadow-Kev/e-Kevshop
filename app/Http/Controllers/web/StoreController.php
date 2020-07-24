<?php

namespace App\Http\Controllers\web;

use App\Categorie;
use App\Http\Controllers\Controller;
use App\Panier;
use App\Produit;
use App\Marque;
use App\Promotion;
use App\Rubrique;
use App\Shop;
use App\VenteFlash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    protected $oraimoCatId = 18;


    public function __construct()
    {
        $infosPanier = ['qteTotal'=>0,'mnt_total'=>0];
        if(Auth::id()){
            $infosPanier = Panier::user_cart_infos(Auth::id());
        }
        view()->share('infosPanier', $infosPanier);

    }

    public function index( $catId=null, $shop = null, Request $request)
    {
        $prods = Produit::where('active',1)->where('deleted_at',null);
        $catToDisplay = null;
        $storeToDisplay = null;
        $marqueToDisplay = null;
        $rubriqueToDisplay = null;
        $ancestors = [];

        if(!is_null($catId)){
            //times().'-'.ID.'-'.SLUG
            $exp_arr  = explode('-',$catId);
            if(is_array($exp_arr) && count($exp_arr) > 1){
                $id =  $exp_arr[1];
                if($id == $this->oraimoCatId){
                    $catToDisplay = Categorie::find($this->oraimoCatId);
                    $prods = $catToDisplay->getAllDescendentProducts();
                    $ancestors = $catToDisplay->getOraimoAncestors();
                    $produits = $prods->paginate(21);
                }else{
                    $prods = Produit::where('categorie',$id);
                    $catToDisplay = Categorie::find($id);
                }
                
            }                
       }

       if($request->has('tabs')){ 
            $prods->where('kdm_produits.categorie',2);
       }

        if($request->has('smartphones')){
            $prods->where('kdm_produits.categorie',1);
        }

        if($request->has('feature')){
            $prods->where('kdm_produits.categorie',6);
        }

        if($request->has('oraimo')){
            $prods->where('kdm_produits.categorie',18)
                    ->join('kdm_categorie','kdm_produits.categorie', '=', 'kdm_categorie.id')
                    ->where('kdm_categorie.categorie_parent',18);
        }

       if(!is_null($shop)){
           //times().'-'.ID.'-'.SLUG
           $exp_arr  = explode('-',$shop);
           if(is_array($exp_arr) && count($exp_arr)> 1){
                $id =  $exp_arr[1];
                $prods = Produit::where('shop',$id);
                $storeToDisplay = Shop::find($id);
           }
       }

       if($request->has('marque')){
           //times().'-'.ID.'-'.SLUG
           $exp_arr  = explode('-',$request->get('marque'));

           if(is_array($exp_arr) && count($exp_arr) > 1){
               $id =  $exp_arr[1];
               $prods->where('marque',$id);
               $marqueToDisplay = Marque::find($id);
           }
            
       }

       if($request->has('rubrique')){
           //times().'-'.ID.'-'.SLUG
           $exp_arr  = explode('-',$request->get('marque'));
           if(is_array($exp_arr) && count($exp_arr)> 1){
                $id = explode('-',$request->get('rubrique'))[1];
                $rubriqueToDisplay = Rubrique::find($id);
                $prods = Produit::where('deleted_at',null)
                            ->where('active',1)
                            ->whereIn('id', $rubriqueToDisplay->produits->pluck('id')->all());
           }
        }

        
       $produits = $prods->orderBy('prix','asc')->paginate(21);
       $lesplusvisites = Produit::where('active',1)->where('deleted_at',null)->orderBy('visite','desc')->take(20)->get();

       $page = 'Boutique';
       $data_to_view = [
            "produits"=>$produits,
            'page'=>$page,
            'lesplusvisites'=>$lesplusvisites
       ];

       if($request->has('rubrique'))
            $data_to_view['rubriqueToDisplay']=$rubriqueToDisplay; 
       if($request->has('marque'))
            $data_to_view['marqueToDisplay']=$marqueToDisplay; 
       if(!is_null($shop))
            $data_to_view['storeToDisplay']=$storeToDisplay; 
       if(!is_null($catId))
           $data_to_view['catToDisplay']=$catToDisplay; 

     //   $flash = VenteFlash::where("date_fin",">=",now());
        return view("web.store", $data_to_view);

    }

    public function oraimo($catId=null, Request $request){

        $prods = Produit::where('active',1)->where('deleted_at',null)->orderBy('prix','asc');
        $catToDisplay = null;
        $ancestors = [];

        if(!is_null($catId)){
            //times().'-'.ID.'-'.SLUG
            $exp_arr  = explode('-',$catId);
            if(is_array($exp_arr) && count($exp_arr) > 1){
                $id =  $exp_arr[1];
                $prods->where('categorie',$id);
                $catToDisplay = Categorie::find($id);
            }
       }else{
          // $prods = Produit::where('categorie',$this->oraimoCatId);
           $catToDisplay = Categorie::find($this->oraimoCatId);
           $prods = $catToDisplay->getAllDescendentProducts();
       }

       $ancestors = $catToDisplay->getOraimoAncestors();
       $produits = $prods->paginate(21);
       $lesplusvisites = Produit::where('active',1)->where('deleted_at',null)->orderBy('visite','desc')->take(20)->get();
       
       $page = 'Oraimo';
       $data_to_view = [
            "produits"=>$produits,
            'page'=>$page,
            'lesplusvisites'=>$lesplusvisites,
            'ancestors'=>$ancestors
       ];

     
   //    if(!is_null($catId))
           $data_to_view['catToDisplay']=$catToDisplay; 

     //   $flash = VenteFlash::where("date_fin",">=",now());
        return view("web.oraimo", $data_to_view);



    }

    public function search(Request $request){


        $prods = Produit::where('active',1)->where('deleted_at',null)->orderBy('prix','asc');
        $searchLabel = $request->get('search');
        $catId = $request->get('category');
        
        if($catId > 0){
           $prods->where('categorie',$catId);
          // $catToDisplay = Categorie::find($id);
        }
        // $prods->where("nom",'LIKE',"%".$searchLabel."%")
        //     ->orWhere("description","LIKE","%".$searchLabel."%");

        $prods->whereRaw("(nom LIKE '%".$searchLabel."%' OR description LIKE  '%".$searchLabel."%' )");

       $produits = $prods->paginate(21);
       $lesplusvisites = Produit::where('active',1)->where('deleted_at',null)->orderBy('visite','desc')->take(20)->get();

       $page = 'Recherche';
       $data_to_view = [
            "produits"=>$produits,
            'page'=>$page,
            'lesplusvisites'=>$lesplusvisites,
            'search'=> $searchLabel
       ];
     
      //  $data_to_view['catToDisplay']=$catToDisplay; 
        return view("web.search", $data_to_view);
    }

    public function toutesLesMarques(Request $request){
        $prods = Produit::where('active',1)->where('deleted_at',null)->orderBy('prix','asc');
        $searchLabel = $request->get('search');
        $marqueToDisplay = null;
        $toutesMarques = Marque::where('deleted_at',null)->where('displayOnSite',1)->get();
        if($request->has('marque')){
            //times().'-'.ID.'-'.SLUG
            $exp_arr  = explode('-',$request->get('marque'));
 
            if(is_array($exp_arr) && count($exp_arr) > 1){
                $id =  $exp_arr[1];
                $prods->where('marque',$id);
                $marqueToDisplay = Marque::find($id);
            }
             
        }
 
       $produits = $prods->paginate(21);
       $lesplusvisites = Produit::where('active',1)->where('deleted_at',null)->orderBy('visite','desc')->take(20)->get();
       $page = 'Boutique';
       $data_to_view = [
            "produits"=>$produits,
            'page'=>$page,
            'lesplusvisites'=>$lesplusvisites,
            'search'=> $searchLabel,
            'marqueToDisplay'=>$marqueToDisplay,
            'toutesMarques'=>$toutesMarques
       ];
     
      //  $data_to_view['catToDisplay']=$catToDisplay; 
        return view("web.toutesmarques", $data_to_view);
    }

    public function promotions($catId=null, $shop = null, Request $request)
    {
        // $cats = Categorie::where("displayOnMenu","=",1)->orderBy("ordre","ASC")->get();
        // $prods = null;
        // if(is_null($catId))
        //     $prods = Produit::paginate();
        // else
        //     $prods = Produit::where("categorie","=",$catId)->paginate(3);
        $lesplusvisites = Produit::where('active',1)->where('deleted_at',null)->orderBy('visite','desc')->take(20)->get();
        $flash = VenteFlash::where("date_fin",">=",now());
        $d = new \DateTime();
        $promotions = Promotion::where("date_debut",'<=',$d)->where("date_fin",'>=',$d)->get();
        $page = 'Promotions';
        $data_to_view = [
                'page'=>$page,
                'lesplusvisites'=>$lesplusvisites,
                'promotions'=>$promotions
        ];
    
        return view("web.promotions", $data_to_view);
    }

    public function showProduct($prd_id, Request $request)
    {
        $page = 'Boutique';
        $exp_arr  = explode('-',$prd_id);

        if($prd_id && is_array($exp_arr) && count($exp_arr) > 1){
            $id = $exp_arr[1];
            $recently_added = Produit::with(['images' => function($q) {
                $q->orderBy('ordre', 'asc');
            }])
            ->whereHas('_categorie',function($c){
                $c->where('active',"=",1);
            })->orderBy('created_at','DESC')->take(30)->get();
    
    
            $produit= Produit::where("id","=",$id)->get()->first();
    
            $lesautresproduits= Produit::where("deleted_at",null)
                                    ->where('active',1)
                                    ->where('id',"<>",$id)
                                    ->take(30)->get();
            $produit->visite = $produit->visite + 1;
            $produit->save();
        }else{
            return redirect('/');
        }

        return view("web.produits", compact('recently_added','produit','lesautresproduits','page'));
    }

    public function filterPrice(Request $request)
    {
        /*$minprice = Produit::where('active',1)->where('deleted_at',null)
                        ->min('prix');

        $maxprice = Produit::where('active',1)->where('deleted_at',null)
                        ->max('prix');

        $results = Produit::where('active',1)->where('deleted_at',null)
                    ->whereBetween('prix', [$minprice, $maxprice]);
        header('Content-Type:application/json');
        echo json_encode(array_map(function ($result) {
            return [

            ];
        }, $results));*/
        $range = (array) $request->input('price-range');
        $items = Produit::where('active',1)->where('deleted_at', null)
                ->whereBetween('prix', [$range[0], $range[1]])
                ->get();
        
        

        foreach ($items as $i) {
            $prod_url = url('/store/afficher/'.time().'-'.$i->id.'-'.$i->slug);
            $imageProd_url = file_exists('assets/img/articles/'.$i->image)  ? asset('assets/img/articles/'.$i->image) :  (  file_exists(url('storage').'/'.$i->nom) ? url('storage').'/'.$i->nom : asset('storage/'.$i->images->first()->nom ));
            $d1=new DateTime($i->created_at);
            $d2=new DateTime();
            $diff=$d2->diff($d1);
            
            <<<HTML
                <div class="product">
                    <article>
                        <a href="$prod_url">
                            <img class="img-responsive" src="$imageProd_url" alt="" >
                        </a>
HTML;
                        if($diff->d <= 7) {
                            echo '<span class="new-tag">New</span>';
                        }
                        echo '<span class="tag">$cat_nom</span>
                            <a href="#." class="tittle">{{$i->nom}}</a>
                            <p class="rev"> 
                        '; 
                                    
                        

        }

    }

    public function addToCart($idProduit, Request $request)
    {

    }
}
