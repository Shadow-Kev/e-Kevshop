<?php

namespace App\Http\Controllers;

use App\Commande;
use App\Produit;
use Carbon\Carbon;
use App\CodeReduction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $apropos_id = 1;
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');
    }
    use AuthenticatesUsers;

    public function dashboard(Request $request){
        $ventes_du_jours = Commande::where('created_at','LIKE',Carbon::now()->format('Y-m-d').'%')->where('statut',2)->get();
        $produits = Produit::where('deleted_at',null)->count();
        $commandes = Commande::where('deleted_at',null)->orderBy('created_at','desc')->get()->take(15);
        return view('dashboard',compact('commandes','ventes_du_jours','produits'));
    }

    public function dashboard_kadmarketeur(Request $request){
        $auth_kadmarketeur = Auth::user()->id;
        $kadmarketeur = User::where('deleted_at',null)
            ->where([['role',5], ['id', $auth_kadmarketeur]])
            ->orderBy('nom','asc')->get()->first();
        //dd($kadmarketeur->code_kadmarketeur);
        $activation_du_jours = CodeReduction::where('created_at','LIKE',Carbon::now()->format('Y-m-d').'%')->where([['statut',1], ['code_kadmarketeur',$kadmarketeur->code_kadmarketeur]])->get(); //nombre d'activation du jour
        $paye = CodeReduction::where([['statut',1], ['code_kadmarketeur',$kadmarketeur->code_kadmarketeur]])->count(); //Client a payé 200 fcfa
        $montant_du_jour = CodeReduction::where('created_at','LIKE',Carbon::now()->format('Y-m-d').'%')->where([['statut',1], ['code_kadmarketeur',$kadmarketeur->code_kadmarketeur]])->count()*60;
        $montant_totals = $paye*60;
        $activation_totals = CodeReduction::where([['statut',1], ['code_kadmarketeur',$kadmarketeur->code_kadmarketeur]])->get();
        $codes = CodeReduction::where([['deleted_at',null], ['code_kadmarketeur',$kadmarketeur->code_kadmarketeur]])->orderBy('created_at','desc')->get();
        //dd($codes);
        return view('dashboard_kadmarketeur', compact('codes', 'montant_totals', 'activation_du_jours', 'paye', 'montant_du_jour', 'activation_totals', 'kadmarketeur'));
    }

    public function apropos(Request $request){
        $article = Posts::find($this->apropos_id);
        $recent_posts = Posts::where('post_status',1)->where('post_cat_id','>',1)->orderBy('date_publication','desc');
        return view('web.infospage',compact('article','recent_posts'));
    }
}
