<?php

namespace App\Providers;

use App\Categorie;
use App\Panier;
use App\Produit;
use App\Marque;
use App\Rubrique;
use App\Publicites;
use App\Partenaire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer('*', function ($view) {
            $categories  = Categorie::all();
            $view->with('categories', $categories);
        });

        Schema::defaultStringLength(191);

        $menucats = Categorie::where("displayOnMenu","=",1)->where("active","=",1)->orderBy('ordre',"asc")->get();
        $allcats = Categorie::where("active","=",1)->orderBy("ordre","ASC")->get()->take(5);
        $featurePhone = Categorie::where('active',1)->where('id',6)->get();
        $smartPhone = Categorie::where('active',1)->where('id',1)->get();
        $tablette = Categorie::where('active',1)->where('id',2)->get();
        $oraimo = Categorie::where('active',1)->where('id',18)->where('is_categorie_accessoire',1)->get();
        $autreAcc = Categorie::where('active',23)->where('id',6)->get();

        
        $marques = Marque::where('deleted_at',null)
                            ->where('displayOnMenu',1)
                            ->where('displayOnSite',1)
                            ->orderBy('title')
                            ->get();

        $marques_phones = DB::table('kdm_marques')
                            ->join('kdm_produits','kdm_marques.id','=','kdm_produits.marque')
                            ->whereIn('kdm_produits.categorie',[1])
                            ->where('kdm_marques.deleted_at',null)
                            ->where('displayOnMenu',1)
                            ->where('displayOnSite',1)
                            ->orderBy('title')
                            ->select('kdm_marques.id', 'kdm_marques.title', 'kdm_marques.slug')
                            ->distinct()
                            ->get();
        
        $marques_feature_phones = DB::table('kdm_marques')
                            ->join('kdm_produits','kdm_marques.id','=','kdm_produits.marque')
                            ->whereIn('kdm_produits.categorie',[6])
                            ->where('kdm_marques.deleted_at',null)
                            ->where('displayOnMenu',1)
                            ->where('displayOnSite',1)
                            ->orderBy('title')
                            ->select('kdm_marques.id', 'kdm_marques.title', 'kdm_marques.slug')
                            ->distinct()
                            ->get();
        
        $marques_oraimo = DB::table('kdm_marques')
                            ->join('kdm_produits','kdm_marques.id','=','kdm_produits.marque')
                            ->whereIn('kdm_produits.categorie',[18])
                            ->where('kdm_marques.deleted_at',null)
                            ->where('displayOnMenu',1)
                            ->where('displayOnSite',1)
                            ->orderBy('title')
                            ->select('kdm_marques.id', 'kdm_marques.title', 'kdm_marques.slug')
                            ->distinct()
                            ->get();

        
        $marques_tabs = DB::table('kdm_marques')
                            ->join('kdm_produits','kdm_marques.id','=','kdm_produits.marque')
                            ->where('kdm_produits.categorie',2)
                            ->where('kdm_marques.deleted_at',null)
                            ->where('displayOnMenu',1)
                            ->where('displayOnSite',1)
                            ->orderBy('title')
                            ->select('kdm_marques.id', 'kdm_marques.title', 'kdm_marques.slug')
                            ->distinct()
                            ->get();
        
        $allmarques = Marque::where('deleted_at',null)
                            ->where('displayOnSite',1)
                            ->orderBy('title')
                            ->get();
        $categories_accessoires = Categorie::where('deleted_at',null)
                            ->whereNotIn('id',[18])
                            ->where('is_categorie_accessoire',1)
                            ->where('displayOnMenu',0)
                            ->where('active',1)                            
                            ->orderBy('ordre',"asc")
                            ->get();

        $rubriques = Rubrique::where('deleted_at',null)
                            ->where('statut',1)
                            ->orderBy('ordre','titre')
                            ->get();

        $minprice = Produit::where('active',1)->where('deleted_at',null)
                        ->min('prix');

        $maxprice = Produit::where('active',1)->where('deleted_at',null)
                        ->max('prix');

        $megamenu_pub = Publicites::where('statut',1)->where('position',6)->orderBy('id','desc')->first();
        $partenaires = Partenaire::where('statut',1)->get();

        $infosPanier = ['qteTotal'=>0,'mnt_total'=>0];
        
        if(Auth::id()){
            $infosPanier = Panier::user_cart_infos(Auth::id());
            dd($infosPanier);
            // Use customer id
            // Use session id
        }

        view()->share('menucats', $menucats);
        view()->share('allcats', $allcats);
        view()->share('featurePhone', $featurePhone);
        view()->share('smartPhone', $smartPhone);
        view()->share('tablette', $tablette);
        view()->share('oraimo', $oraimo);
        view()->share('autreAcc', $autreAcc);
        view()->share('marques', $marques);
        view()->share('categories_accessoires', $categories_accessoires);
        view()->share('rubriques', $rubriques);
        view()->share('allmarques', $allmarques);
        view()->share('maxprice', $maxprice);
        view()->share('minprice', $minprice);
        view()->share('megamenu_pub', $megamenu_pub);
        view()->share('partenaires', $partenaires);
        view()->share('marques_phones', $marques_phones);
        view()->share('marques_tabs', $marques_tabs);
        view()->share('marques_feature_phones', $marques_feature_phones);
        view()->share('marques_oraimo', $marques_oraimo);
        view()->share('infosPanier', $infosPanier);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
