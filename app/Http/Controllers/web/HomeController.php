<?php

namespace App\Http\Controllers\web;

use App\Categorie;
use App\Panier;
use App\Posts;
use App\Produit;
use App\User;
use App\VenteFlash;
use App\Publicites;
use App\Promotion;
use App\Marque;
use App\Rubrique;
use App\NewsLetterSubscriber;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $apropos_id = 1;
    protected $livraison = 2;
    protected $faq = 3;
    protected $nouveautes_cat_id = 2;
    protected $actualites_cat_id = 3;
    protected $codeKdmarketeurLength = 6;


    public function __construct(){

        $infosPanier = ['qteTotal'=>0,'mnt_total'=>0];
        if(Auth::id()){
            $infosPanier = Panier::user_cart_infos(Auth::id());
        }
        view()->share('infosPanier', $infosPanier);

    }


    public function index(Request $request)
    {
       
        // $prodsTablette = Produit::getNewProducts(config("constant.TABLETTES_CAT_ID"));
        // $prodsAccessoires = Produit::getNewProducts(config("constant.ACCESSOIRES_ID"));
        // $prodsObjConnect = Produit::getNewProducts(config("constant.OBJETSCONNECTES_CAT_ID"));
        // $flash = VenteFlash::where("date_fin",">=",now());

        $value = $request->server('HTTP_COOKIE');
       // dd($value);

        $page = 'Accueil';
        
        //exit();
        $now = time();
        $main_slides = Publicites::where('position','=',1)
                        ->where('statut','=',1)
                        ->where('date_debut','<=',date('Y-m-d H:i'))
                        ->where('date_fin','>=',date('Y-m-d H:i'))
                        ->get();

        $new_line = Publicites::where('position','=',2)
                        ->where('statut','=',1)
                        ->where('date_debut','<=',date('Y-m-d H:i'))
                        ->where('date_fin','>=',date('Y-m-d H:i'))
                        ->first();
        
        $weekly = Publicites::where('position','=',3)
                    ->where('statut','=',1)
                    ->where('date_debut','<=',date('Y-m-d H:i'))
                        ->where('date_fin','>=',date('Y-m-d H:i'))
                    ->first();
                    
        /*$recently_added = Produit::where('active','=',1)->where('deleted_at',null)
                            ->whereHas('_categorie',function($c){
                                $c->where('active',"=",1);
                            })->orderBy('created_at','DESC')->take(30)->get();*/

        $recently_added = Produit::with(['images' => function($q) {
            $q->orderBy('ordre', 'asc');
        }])
        ->whereHas('_categorie',function($c){
            $c->where('active',"=",1);
        })->orderBy('created_at','DESC')->take(30)->get();

        //dd($recently_added2->first()->images);
                            
        /*$sql="SELECT p.id AS id_produit, p.nom as nom_produit, p.prix, p.prix_reduit, p.prix_achat, p.quantite, p.shop, p.marque, p.reference, p.categorie, p.image AS image_produit, p.garantie, p.description, p.slug AS slug_produit, p.active AS active_produit, p.visite,
            c.id AS id_categorie, c.nom as nom_categ, c.description, c.image AS image_categorie, c.slug AS slug_categorie, c.displayOnMenu, c.is_categorie_accessoire, c.categorie_parent, c.active AS active_categorie, c.ordre
            FROM kdm_produits p, kdm_categories c , kdm_produits_to_images ptoi, kdm_images i
            WHERE p.categorie = c.id
            AND c.active = 1
            AND p.id = ptoi.id_produits
            AND i.id = ptoi.id_images
            
            ORDER BY ( p.created_at)
            LIMIT 30";
                            
        $pdo = PdoConnexion::getPDO();
        $data_result = $pdo->query($sql)->fetchAll();
        //dd($data_result);
        $recently_added = [];
        foreach($data_result as $value){
            $cat= new Categorie();
            $cat->setNomCategorie($value['nom_categ']);
            $mypojoProduit=new Produit();
            $mypojoProduit->setIdProduit($value['id_produit']);
            $mypojoProduit->setNomProduit($value['nom_produit']);
            $mypojoProduit->setPrixProduit($value['prix']);
            $mypojoProduit->setPrixAchatProduit($value['prix_achat']);
            $mypojoProduit->setPrixReduitProduit($value['prix_reduit']);
            $mypojoProduit->setQuantiteProduit($value['quantite']);
            $mypojoProduit->setShopProduit($value['shop']);
            $mypojoProduit->setMarqueProduit($value['marque']);
            $mypojoProduit->setCategorieProduit($value['categorie']);
            $mypojoProduit->setImageProduit($value['image_produit']);
            $mypojoProduit->setGarantieProduit($value['garantie']);
            $mypojoProduit->setDescriptionProduit($value['description']);
            $mypojoProduit->setSlugProduit($value['slug_produit']);
            $mypojoProduit->setActiveProduit($value['active_produit']);
            $mypojoProduit->setVisiteProduit($value['visite']);
            $mypojoProduit->setNomCategorieProduit($value['nom_categ']);
            //$mypojoProduit->setCategorie($cat);

            $recently_added[] = $mypojoProduit;
        }
        //dd($recently_added);*/

    $accessoires = Produit::where('active','=',1)->where('deleted_at',null)
                                ->whereHas('_categorie',function($c){
                                    $c->where('is_categorie_accessoire',"=",1)->where('id','=',3);
                                })->orderBy('created_at','DESC')->get();



    $c = Categorie::find(1);
    $phones =  Produit::with(['images' => function($q) {
        $q->orderBy('ordre', 'asc');
    }])
    ->where('active','=',1)->where('deleted_at',null)
    ->whereHas('_categorie',function($c){
        $c->where([['active',1], ['id',1]]);
    })->orderBy('created_at','DESC')->get();

        $cats_to_display = [
            ['id'=>1, 'first'=>true,'active'=>'active', 'icon-class'=>'fa fa-mobile', 'cat'=>Categorie::find(1), 'tabid'=>'smart','products'=>$phones], // Smart Phone 1
        [ 'id'=>3, 'active'=>'','icon-class'=>'fa fa-keyboard-o', 'cat'=>Categorie::find(3), 'tabid'=>'accessoires', 'products'=>$accessoires], // Accessoire 3
            [ 'id'=>4, 'active'=>'','icon-class'=>'fa fa-clock-o', 'cat'=>Categorie::find(4), 'tabid'=>'montres', 'products'=>Categorie::find(4)->produits->take(5)],//Montres 4 
            [ 'id'=>2, 'active'=>'','icon-class'=>'fa fa-tablet', 'cat'=>Categorie::find(2), 'tabid'=>'tablettes', 'products'=>Categorie::find(2)->produits],   //Tablettes 2
            [ 'id'=>5, 'active'=>'','icon-class'=>'fa fa-battery-half', 'cat'=>Categorie::find(20), 'tabid'=>'laptops', 'products'=>Categorie::find(20)->produits],//Chargeurs 20
            [ 'id'=>23, 'active'=>'','icon-class'=>'fa fa-archive', 'cat'=>Categorie::find(22), 'tabid'=>'autres', 'products'=>Categorie::find(22)->produits],   //Memoires 22
        ];

        $nouveautes = Posts::where('post_cat_id',$this->nouveautes_cat_id)
                            ->where('deleted_at',null)
                            ->where('post_status',1)
                            ->where('publication_date','<=',date('Y-m-d H:i:s'))
                            ->orderBy('created_at','DESC')->get();

        $actualites = Posts::where('post_cat_id',$this->actualites_cat_id)
                            ->where('deleted_at',null)
                            ->where('post_status',1)
                            ->where('publication_date','<=',date('Y-m-d H:i:s'))
                            ->orderBy('created_at','DESC')->get();
        $d = new \DateTime();
        $promos   =  $promotions = Promotion::where("date_debut",'<=',$d)->where("date_fin",'>=',$d)->get();

        $partenaires = "";

        return view("home", compact('systemcats', "recently_added", "main_slides", "new_line","weekly","menucats","allcats","page","cats_to_display","nouveautes","actualites","promos"));
    }

    public function listeNouveautes(Request $request){
        $page = 'Nouveautes';
        $nouveautes = Posts::where('post_cat_id',$this->nouveautes_cat_id)
                            ->where('deleted_at',null)
                            ->where('post_status',1)
                            ->where('publication_date','<=',date('Y-m-d H:i:s'))
                            ->orderBy('created_at','DESC')->paginate(15);

        $recent_posts = Posts::where('post_status',1)->where('post_cat_id','>',1)->orderBy('publication_date','desc')->take(10)->get();
        return view('web.nouveautes',compact('nouveautes','recent_posts','page'));
    }

    private function getCatProducts($cat_id){
        $c = Categorie::find($cat_id);
        return $c->produits();
    }

    public function contact()
    {
        $page = "Nous contacter";
        return view("web.contact", compact('page'));
    }

    public function faq(){
        $article = Posts::find($this->faq);
        $recent_posts = Posts::where('post_status',1)->where('post_cat_id','>',1)->orderBy('publication_date','desc')->take(10)->get();
        return view('web.infospage',compact('article','recent_posts'));
    }

    


    public function apropos(Request $request){
        $article = Posts::find($this->apropos_id);
        $recent_posts = Posts::where('post_status',1)->where('post_cat_id','>',1)->orderBy('publication_date','desc')->take(10)->get();
        return view('web.infospage',compact('article','recent_posts'));
    }

    public function livraison_et_remboursement(Request $request){
        $article = Posts::find($this->livraison );
        $recent_posts = Posts::where('post_status',1)->where('post_cat_id','>',1)->orderBy('publication_date','desc')->take(10)->get();
        return view('web.infospage',compact('article','recent_posts'));
    }

    public function generationMegamenuInfos()
    {
        $entetes_accessoires = Categorie::where('is_categorie_accessoire',1)
                                ->where('active',1)
                                ->where('deleted_at',null)
                                ->orderBy('ordre',"asc")
                                ->get();

        $marques = Marque::where('displayOnSite',1)->get();
    }

    public function listProducts($categorie=null)
    {

        return view("web.produits", compact('systemcats', 'categories_accessoires', "recently_added", "main_slides", "new_line","weekly","menucats","allcats","page","marques",'rubriques'));


    }

    public function subscribeNewsletter(Request $request){
        $validator = Validator::make($request->all(), ['email'=>'required|email'],['email.required'=>'Veuillez saisir une adresse mail']);
        if ($validator->fails()) {
            return redirect()->back()->with('errors',$validator->errors());
        }else{
            $nb = NewsLetterSubscriber::where('mail',$request->get('email'))->count();
            if($nb == 0){
                $subs = new NewsLetterSubscriber();
                $subs->mail = $request->email;
                $subs->adressip = $request->ip();
                $subs->save();
                return redirect('/')->with('success','Vous êtes désormais abonnés à la newsletter...');
            }else{
                return  redirect('/')->with('success','Vous êtes déjà abonnés à la newsletter...');
            }
        }

    }

    public function detailsInfos($article_id){
        $exp_arr  = explode('-',$article_id);
        if(is_array($exp_arr) && count($exp_arr)> 1){
            $id =  $exp_arr[1];
            $article = Posts::find($id);
            $recent_posts = Posts::where('post_status',1)->where('post_cat_id','>',1)->orderBy('publication_date','desc')->take(10)->get();
            return view('web.infospage',compact('article','recent_posts'));
        }

        return redirect()->back();

    }

    public function devenirKadmarketeur(){
        $page = "Devenir Kadmarketeur";
        return view('web.devenir-kadmarketeur');
    }

    public function createKadmarketeur(Request $request){
        $rules = [
            'nom' => 'required',
            'prenom' => '',
            'tel' => ['required','regex:/^0[6,7][0-9]{7}$/'],
            'ville' => 'required',
            'email' => 'required|email',
            'pass' => 'required|min:6|confirmed',
        ];

        $messages = [
            'nom.required' => 'La nom est obligatoire',
            'tel.required' => 'Le téléphone est obligatoire',
            'tel.regex' => 'Veuillez saisir un numero correct',
            'email.required' => 'L\'adresse mail est obligatoire',
            'email.email' => 'Veuillez saisir une adresse mail correcte',
            'pass.required' => 'required|min:6|confirmed',
            'pass.min' => 'Le mot de passe doit avoir 6 caractères au moins',
            'pass.confirmed' => 'Veuillez confirmer le mot de passe'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        $codekadmarketeur='';
        session()->forget('newKadmarketeurCode', $codekadmarketeur);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput()->with('code',$codekadmarketeur);
        }else {

            /*$existants = User::where('deleted_at',null)
                ->whereRaw(" (username = '".$request->tel."' OR username = '".$request->email."' OR email = '".$request->tel."' OR email = '".$request->email."') ")
                ->get();

            if(count($existants)>0){
                return redirect()->back()->withErrors("Adresse mail ou téléphone déjà utilisé")->withInput();
            }else{*/
                $k = new User();
                $k->username = $request->tel;
                $k->nom = $request->nom;
                $k->prenom = $request->prenom;
                $k->email = $request->email;
                $k->tel =$request->tel;
                $k->password = bcrypt($request->pass);
                $k->statut = 0;
                $k->role = 5; // 5 ==> Kadmarketeur
                $codekadmarketeur = Str::random($this->codeKdmarketeurLength);
                $k->code_kadmarketeur = $codekadmarketeur;
                $k->activate_kadmarketing = 0;
                $k->save();
                if($request->has('email')){
                    $headers = "Mime-Version: 1.0\n";
                    $headers .= "Content-Type: text/html;charset=UTF-8\n";
                    $headers .= "From: ".env('MAIL_USERNAME');
                    $message = view('/mail/createKadmarketeur', ['user' => $k])->render();
                    \mail($k->email,'Inscription KADMARKETEUR',$message,$headers);
                }
            /*}*/

            return redirect()->back()->with("code",$codekadmarketeur)->with("success","Code généré avec succès. Veuillez noter ce code SVP.")->with('newKadmarketeurCode', $codekadmarketeur);
        }
    }

    
    public function discountCode(Request $request){
        $page = "Code reduction";
        return view('web.code-reduction');
    }





}
