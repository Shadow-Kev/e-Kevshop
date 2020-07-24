<?php

namespace App\Http\Controllers\web;
use App\Panier;
use App\Produit;
use App\VenteFlash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;


class LoginController extends Controller {
    use AuthenticatesUsers;
    protected $username = 'username';
    protected $redirectTo = '/';
    protected $guard = 'web';

        public function __construct()
        {
            $infosPanier = ['qteTotal'=>0,'mnt_total'=>0];
            if(\Illuminate\Support\Facades\Auth::id()){
                $infosPanier = Panier::user_cart_infos(Auth::id());
            }
            view()->share('infosPanier', $infosPanier);

        }

    public function login() {

        $prods = Produit::getNewProducts(config("constant.SMARTPHONES_CAT_ID"));
        $prodsTablette = Produit::getNewProducts(config("constant.TABLETTES_CAT_ID"));
        $prodsAccessoires = Produit::getNewProducts(config("constant.ACCESSOIRES_ID"));
        $prodsObjConnect = Produit::getNewProducts(config("constant.OBJETSCONNECTES_CAT_ID"));
        $flash = VenteFlash::where("date_fin",">=",now());

        if (Auth::guard('web')->check()) {
          
            return redirect()->route('home',array("flash"=>$flash,"produits"=>$prods, "produits1"=>$prodsTablette,"produits2"=>$prodsAccessoires,"produits3"=>$prodsObjConnect));
        }
        $page = 'Accueil';
        return view('_market-login',array("flash"=>$flash,"produits"=>$prods, "produits1"=>$prodsTablette,"produits2"=>$prodsAccessoires,"produits3"=>$prodsObjConnect, 'page'=>$page));
    }

    public function postLogin(Request $request) {
        $auth = Auth::guard('web')
            ->attempt([
                    'username' => $request->l_log,
                    'password' => $request->l_pass,
                    'statut' => 1]
            );
        if ($auth) {
            flashy()->success('Bienvenu sur Kadmarket '.Auth::user()->nom, '');//
            return redirect()->route('home');
        }
        session()->flash('logfailed','Indentifiant incorrect, veuillez réesayer ou contactez les administrateurs');
        return redirect()->route('webLogin')->withInput()->withErrors(['Echec d\'authentification; veuillez verifier vos acces.']);
    }



    public function logout() {
        Auth::guard('web')->logout();
        session()->flush();
        return redirect()->route('home');
    }

    public function registrer(Request $request)
    {

        

    }


}