<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Produit;
use App\VenteFlash;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;


class LoginController extends Controller {
    use AuthenticatesUsers;

    protected $username = 'username';
    protected $redirectTo = '/dashboard';
    protected $guard = 'web';
    public function login() {
        if (Auth::guard('web')->check()) {
            return redirect()->route('dashboard');
        }
        $cats = Categorie::where("displayOnMenu","=",1)->orderBy("nom","ASC")->get();
        $prods = Produit::getNewProducts(config("constant.SMARTPHONES_CAT_ID"));
        $prodsTablette = Produit::getNewProducts(config("constant.TABLETTES_CAT_ID"));
        $prodsAccessoires = Produit::getNewProducts(config("constant.ACCESSOIRES_ID"));
        $prodsObjConnect = Produit::getNewProducts(config("constant.OBJETSCONNECTES_CAT_ID"));
        $flash = VenteFlash::where("date_fin",">=",now());
        $roles = Role::where([['deleted_at', null], ['id', 1]])->orWhere('id',5)->get();
        return view('login', array("categories"=>$cats,"flash"=>$flash,"produits"=>$prods, "produits1"=>$prodsTablette,"produits2"=>$prodsAccessoires,"produits3"=>$prodsObjConnect, "roles"=>$roles));
    }
    public function postLogin(Request $request) {
        $auth = Auth::guard('web')
                ->attempt([
            'email' => $request->username,
            'password' => $request->password,
            'role' => $request->role,
            'statut' => 1]
        );
        $a = Auth::user();
        if ($auth) {
            if ($a->roles()->get()->first()->id == 1 ) {
                return redirect()->route('dashboard');
            }
            if ($a->roles()->get()->first()->id == 5) {
                return redirect()->route('dashboard_kadmarketeur');
            }
            flashy()->success('Bienvenue sur votre tableau de bord '.$a->nom.' '.$a->prenom, '');
        }
        session()->flash('logfailed','Indentifiant incorrect, veuillez réesayer ou contactez les administrateurs');
        return redirect()->route('getlogin');
    }


    
    public function logout() {
        Auth::guard('web')->logout();
        return redirect()->route('getlogin');
    }
     
}