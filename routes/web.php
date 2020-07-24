<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(["namespace"=>"web"], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/', 'HomeController@index')->name('homepost');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/faq', 'HomeController@faq')->name('faq');
    Route::get('/details-infos/{infoid?}', 'HomeController@detailsInfos')->name('detailsInfos');
    Route::get('/apropos', 'HomeController@apropos')->name('apropos');
    Route::get('/livraison-remboursement', 'HomeController@livraison_et_remboursement')->name('livraison-remboursement');
    Route::get('/login', 'LoginController@login')->name('webLogin');
    Route::get('/login.php', 'LoginController@login')->name('webLogin');
    Route::get('/logout', 'LoginController@logout')->name('webLogout');
    Route::post('/login', 'LoginController@postLogin')->name('process-login');
    Route::get('/store/afficher/{id}', 'StoreController@showProduct')->name('productDetails');
    Route::get('/store/{catId?}/{shopId?}', 'StoreController@index')->name('store');
    Route::get('/store/filter', 'ShopController@filterPrice', 'web.web.store');
    Route::get('/promotions', 'StoreController@promotions')->name('promotions');
    Route::get('/oraimo/{catId?}', 'StoreController@oraimo')->name('oraimo');
    Route::post('/search', 'StoreController@search')->name('search');
    Route::get('/search', 'StoreController@search')->name('searchGet');
    Route::get('/panier', 'CartController@liste')->name('monPanier');
    Route::get('/methods', 'CartController@listeMethods')->name('paymentMethods');
    Route::post('/processmethodes', 'CartController@processMethodPaiement')->name('processlivraison');
    Route::get('/mode-livraison', 'CartController@choixLivraison')->name('modeLivraisonCli');
    Route::post('/processlivraison', 'CartController@processLivraison')->name('processlivraison');
    Route::get('/confirmation', 'CartController@confirmation')->name('confirmationCmd');
    Route::get('/proceed', 'CartController@proceedCheckout')->name('confirmationCmd');
    Route::post('/register', 'RegisterController@register')->name('client.register');
    Route::get('/activate/{username}/{token?} ', 'RegisterController@activateUser')->name('activate-account-bylink');
    Route::post('/activation/{username}/{token?} ', 'RegisterController@activateUser')->name('activate-account');
    Route::post('/subscribe-newsletter', 'HomeController@subscribeNewsletter')->name('subscribe-newsletter');
    Route::get('/toutes-marques', 'StoreController@toutesLesMarques')->name('toutesLesMarques');
    Route::get('/devenir-kadmarketeur', 'HomeController@devenirKadmarketeur')->name('devenirKadmarketeur');
    Route::post('/inscrire-kadmarketeur', 'HomeController@createKadmarketeur')->name('inscrire-kadmarketeur');
    Route::get('/code-de-reduction', 'HomeController@discountCode')->name('codeReduction');
    Route::get('/nouveautes', 'HomeController@listeNouveautes')->name('nouveautes');
    Route::post('/generer-code-reduction', 'RemiseController@generateDiscountCode')->name('buyDiscount');
    Route::get('/payecode', 'RemiseController@buyDiscountCode')->name('buyDiscount');
    Route::post('/appliquercode', 'RemiseController@processReduction')->name('buyDiscount');
    Route::post('/pvit-callback', 'CartController@callback')->name('callbackUrl');





    //WEB API
    Route::get('/addToCart/{idstring}/{quantity}','CartController@addToCart')->name('webapi.addtocart');
    Route::get('/removeFromCart/{idstring}','CartController@removeFromCart')->name('webapi.removefromcart');
    Route::get('/increaseCartQuantity/{idstring}/{quantity}','CartController@addToCart')->name('webapi.increaseCart');
    Route::get('/decreaseCartQuantity/{idstring}/{quantity}','CartController@decreaseQuantity')->name('webapi.decreaseCart');

});

Route::group(["prefix"=>"manager"], function(){
    Route::get('/get-login', "LoginController@login")->name('getlogin');
    Route::post('/login', 'LoginController@postLogin')->name('login');
    Route::get('/noPhomeermission', function() {
        return view('noPermission');
    });
});



Route::group(['middleware' => ['senseiAuth', 'roles'], "prefix"=>"manager"], function () {

    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::get('/dashboard_kadmarketeur', 'HomeController@dashboard_kadmarketeur')->name('dashboard_kadmarketeur');
    Route::get('/logout', 'LoginController@logout')->name('logout');

    Route::get('categorie', 'CategorieController@index')->name('categorie.index');
    Route::get('categorie/create', 'CategorieController@create')->name('categorie.create');
    Route::get('categorie/edit/{id}', 'CategorieController@edit')->name('categorie.edit');
    Route::get('categorie/{id}', 'CategorieController@show')->name('categorie.show');
    Route::post('categorie', 'CategorieController@store')->name('categorie.store');
    Route::post('categorie/{id}', 'CategorieController@update')->name('categorie.update');
    Route::delete('categorie/{slug}', 'CategorieController@destroy')->name('categorie.destroy');


    Route::post('categorie-post', 'CategoriePostController@store')->name('categoriePost.store');
    Route::get('categorie-post/create', 'CategoriePostController@create')->name('categoriePost.create');
    Route::get('categorie-post/edit/{id}', 'CategoriePostController@edit')->name('categoriePost.edit');
    Route::get('categorie-post', 'CategoriePostController@index')->name('categoriePost.index');
    Route::post('categorie-post/{id}', 'CategoriePostController@update')->name('categoriePost.update');
    Route::delete('categorie-post/{slug}', 'CategoriePostController@destroy')->name('categoriePost.destroy');
    Route::get('categorie-post/{id}', 'CategoriePostController@show')->name('categoriePost.show');
   


    Route::post('partners', 'PartenaireController@store')->name('partenaires.store');
    Route::get('partners/create', 'PartenaireController@create')->name('partenaires.create');
    Route::get('partners/edit/{id}', 'PartenaireController@edit')->name('partenaires.edit');
    Route::get('partners', 'PartenaireController@index')->name('partenaires.index');
    Route::post('partners/{id}', 'PartenaireController@update')->name('partenaires.update');
    Route::delete('partners/{slug}', 'PartenaireController@destroy')->name('partenaires.destroy');
    Route::get('partners/{id}', 'PartenaireController@show')->name('partenaires.show');
   

    Route::get('marque', 'MarqueController@index')->name('marque.index');
    Route::get('marque/create', 'MarqueController@create')->name('marque.create');
    Route::get('marque/edit/{slug}', 'MarqueController@edit')->name('marque.edit');
    Route::get('marque/{slug}', 'MarqueController@show')->name('marque.show');
    Route::post('marque', 'MarqueController@store')->name('marque.store');
    Route::post('marque/{id}', 'MarqueController@update')->name('marque.update');
    Route::delete('marque/{slug}', 'MarqueController@destroy')->name('marque.destroy');

    Route::get('caracteristique', 'CaracteriqueController@index')->name('caracteristique.index');
    Route::get('caracterique/create', 'CaracteriqueController@create')->name('caracterique.create');
    Route::get('caracterique/edit/{id}', 'CaracteriqueController@edit')->name('caracterique.edit');
    Route::get('caracterique/{id}', 'CaracteriqueController@show')->name('caracterique.show');
    Route::post('caracterique', 'CaracteriqueController@store')->name('caracterique.store');
    Route::delete('caracterique/{id}', 'CaracteriqueController@destroy')->name('caracteristique.destroy');
    Route::post('caracterique/{id}', 'CaracteriqueController@update')->name('caracterique.update');

    Route::get('produit', 'ProduitController@index')->name('produit.index');
    Route::get('produit/create', 'ProduitController@create')->name('produit.create');
    Route::get('produit/edit/{id}', 'ProduitController@edit')->name('produit.edit');
    Route::get('produit/{id}', 'ProduitController@show')->name('produit.show');
    Route::get('produit-autocomplete', 'ProduitController@autocomplete')->name('produit-autocomplete');
    Route::post('produit', 'ProduitController@store')->name('produit.store');
    Route::post('produit/session', 'ProduitController@storeSession')->name('produit.store-session');
    Route::put('produit/{id}', 'ProduitController@update')->name('produit.update');
    Route::delete('produit/{id}', 'ProduitController@destroy')->name('produit.destroy');

    Route::get('posts', 'PostsController@index')->name('posts.index');
    Route::get('posts/create', 'PostsController@create')->name('posts.create');
    Route::get('posts/edit/{id}', 'PostsController@edit')->name('posts.edit');
    Route::get('posts/{id}', 'PostsController@show')->name('posts.show');
    Route::post('posts', 'PostsController@store')->name('posts.store');
    Route::post('posts/{id}', 'PostsController@update')->name('posts.update');
    Route::delete('posts/{id}', 'PostsController@destroy')->name('posts.destroy');

    Route::get('commande', 'CommandeController@index')->name('commande.index');
    Route::get('commande/create', 'CommandeController@create')->name('commande.create');
    Route::get('commande/edit/{slug}', 'CommandeController@edit')->name('commande.create');
    Route::get('commande/details/{slug}', 'CommandeController@show')->name('commande.show');
    Route::post('commande', 'CommandeController@store')->name('commande.store');
    Route::put('commande/{slug}', 'CommandeController@update')->name('commande.update');
    Route::delete('commande/{slug}', 'CommandeController@destroy')->name('modepaiement.destroy');

    Route::get('modepaiement', 'ModePaiementController@index')->name('modepaiement.index');
    Route::get('modepaiement/create', 'ModePaiementController@create')->name('modepaiement.create');
    Route::get('modepaiement/edit/{slug}', 'ModePaiementController@edit')->name('modepaiement.create');
    Route::get('modepaiement/{slug}', 'ModePaiementController@show')->name('modepaiement.show');
    Route::post('modepaiement', 'ModePaiementController@store')->name('modepaiement.store');
    Route::put('modepaiement/{slug}', 'ModePaiementController@update')->name('modepaiement.update');
    Route::delete('modepaiement/{slug}', 'ModePaiementController@destroy')->name('modepaiement.destroy');

    Route::get('modelivraison', 'ModeLivraisonController@index')->name('modelivraison.index');
    Route::get('modelivraison/create', 'ModeLivraisonController@create')->name('modelivraison.create');
    Route::get('modelivraison/edit/{slug}', 'ModeLivraisonController@edit')->name('modelivraison.create');
    Route::get('modelivraison/{slug}', 'ModeLivraisonController@show')->name('modelivraison.show');
    Route::post('modelivraison', 'ModeLivraisonController@store')->name('modelivraison.store');
    Route::put('modelivraison/{slug}', 'ModeLivraisonController@update')->name('modelivraison.update');
    Route::delete('modelivraison/{slug}', 'ModeLivraisonController@destroy')->name('modelivraison.destroy');

    Route::get('livraison', 'LivraisonController@index')->name('livraison.index');
    Route::get('livraison/create', 'LivraisonController@create')->name('livraison.create');
    Route::get('livraison/edit/{slug}', 'LivraisonController@edit')->name('livraison.create');
    Route::get('livraison/{slug}', 'LivraisonController@show')->name('livraison.show');
    Route::post('livraison', 'LivraisonController@store')->name('livraison.store');
    Route::put('livraison/{slug}', 'LivraisonController@update')->name('livraison.update');
    Route::delete('livraison/{slug}', 'LivraisonController@destroy')->name('livraison.destroy');

    Route::get('paiement', 'PaiementController@index')->name('paiement.index');
    Route::get('paiement/create', 'PaiementController@create')->name('paiement.create');
    Route::get('paiement/edit/{slug}', 'PaiementController@edit')->name('paiement.create');
    Route::get('paiement/{slug}', 'PaiementController@show')->name('paiement.show');
    Route::post('paiement', 'PaiementController@store')->name('paiement.store');
    Route::put('paiement/{slug}', 'PaiementController@update')->name('paiement.update');
    Route::delete('paiement/{slug}', 'PaiementController@destroy')->name('paiement.destroy');

    Route::get('vente', 'VenteController@index')->name('vente.index');
    Route::get('vente/create', 'VenteController@create')->name('vente.create');
    Route::get('vente/edit/{slug}', 'VenteController@edit')->name('vente.create');
    Route::get('vente/{slug}', 'VenteController@show')->name('vente.show');
    Route::post('vente', 'VenteController@store')->name('vente.store');
    Route::put('vente/{slug}', 'VenteController@update')->name('vente.update');
    Route::delete('vente/{slug}', 'VenteController@destroy')->name('vente.destroy');

    Route::get('venteflash', 'VenteFlashController@index')->name('venteflash.index');
    Route::get('venteflash/create', 'VenteFlashController@create')->name('venteflash.create');
    Route::get('venteflash/edit/{id}', 'VenteFlashController@edit')->name('venteflash.create');
    Route::get('venteflash/{id}', 'VenteFlashController@show')->name('venteflash.show');
    Route::post('venteflash', 'VenteFlashController@store')->name('venteflash.store');
    Route::post('venteflash/{id}', 'VenteFlashController@update')->name('venteflash.update');
    Route::delete('venteflash/{id}', 'VenteFlashController@destroy')->name('venteflash.destroy');

    Route::get('image', 'ImageController@index')->name('image.index');
    Route::get('image/create', 'ImageController@create')->name('image.create');
    Route::get('image/edit/{slug}', 'ImageController@edit')->name('image.create');
    Route::get('image/{slug}', 'ImageController@show')->name('image.show');
    Route::post('image', 'ImageController@store')->name('image.store');
    Route::put('image/{slug}', 'ImageController@update')->name('image.update');
    Route::delete('image/{slug}', 'ImageController@destroy')->name('image.destroy');

    Route::get('shop', 'ShopController@index')->name('shop.index');
    Route::get('shop/create', 'ShopController@create')->name('shop.create');
    Route::get('shop/edit/{id}', 'ShopController@edit')->name('shop.edit');
    Route::get('shop/{slug}', 'ShopController@show')->name('shop.show');
    Route::post('shop', 'ShopController@store')->name('shop.store');
    Route::post('shop/{id}', 'ShopController@update')->name('shop.update');
    Route::delete('shop/{slug}', 'ShopController@destroy')->name('shop.destroy');

    

    Route::get('promotion', 'PromotionController@index')->name('promotion.index');
    Route::get('promotion/create', 'PromotionController@create')->name('promotion.create');
    Route::get('promotion/edit/{id}', 'PromotionController@edit')->name('promotion.create');
    Route::get('promotion/{slug}', 'PromotionController@show')->name('promotion.show');
    Route::post('promotion', 'PromotionController@store')->name('promotion.store');
    Route::post('promotion/{id}', 'PromotionController@update')->name('promotion.update');
    Route::delete('promotion/{slug}', 'PromotionController@destroy')->name('promotion.destroy');


    Route::get('publicites', 'PublicitesController@index')->name('publicites.index');
    Route::get('publicites/create', 'PublicitesController@create')->name('publicites.create');
    Route::get('publicites/edit/{id}', 'PublicitesController@edit')->name('publicites.edit');
    Route::get('publicites/{slug}', 'PublicitesController@show')->name('publicites.show');
    Route::post('publicites', 'PublicitesController@store')->name('publicites.store');
    Route::post('publicites/{id}', 'PublicitesController@update')->name('publicites.update');
    Route::delete('publicites/{slug}', 'PublicitesController@destroy')->name('publicites.destroy');


    Route::get('rubriques', 'RubriquesController@index')->name('rubriques.index');
    Route::get('rubriques/create', 'RubriquesController@create')->name('rubriques.create');
    Route::get('rubriques/edit/{id}', 'RubriquesController@edit')->name('rubriques.edit');
    Route::get('rubriques/{slug}', 'RubriquesController@show')->name('rubriques.show');
    Route::post('rubriques', 'RubriquesController@store')->name('rubriques.store');
    Route::post('/rubriques/ajouterproduits','RubriquesController@saveProdsForRubrique')->name('rubriques.saveforproducts');
    Route::post('rubriques/{id}', 'RubriquesController@update')->name('rubriques.update');
    Route::delete('rubriques/{slug}', 'RubriquesController@destroy')->name('rubriques.destroy');
    Route::delete('/rubriques/dropfromrubriques/{rub}/{prod}','RubriquesController@dropFromRub')->name('rubriques.dropfromrub');
    Route::get('/rubriques/details/{id}','RubriquesController@displayDetails')->name('rubriques.displaydetails');
    Route::get('/rubriques/listprods/{cat}/{four}','RubriquesController@getprodsfromcatfour')->name('rubriques.displaydetails');
    Route::get('/rubriques/setleadproduct/{rub}/{prod}','RubriquesController@setLeadProduct')->name('rubriques.setlead');
    
    Route::get('role', 'RoleController@index')->name('role.index');
    Route::get('role/create', 'RoleController@create')->name('role.create');
    Route::get('role/{id}/edit', 'RoleController@edit')->name('role.edit');
    Route::get('role/{slug}', 'RoleController@show')->name('role.show');
    Route::post('role', 'RoleController@store')->name('role.store');
    Route::put('role/{slug}', 'RoleController@update')->name('role.update');
    Route::delete('role/{slug}', 'RoleController@destroy')->name('role.destroy');
    Route::resource('media', 'MediaController');

    Route::get('/my-profile', 'ProfileController@index')->name('myprofile');
    Route::get('/my-profile-password', 'ProfileController@password')->name('myprofile.password');
    Route::get('/my-profile-private-data', 'ProfileController@private')->name('myprofile.private');
    Route::get('/my-profile-picture', 'ProfileController@picture')->name('myprofile.picture');
    Route::post('profile-picture/store', 'MediaController@store')->name('profile.picture.store');
    Route::post('/password-modifiable', 'ProfileController@changeMyPassword');
    Route::post('/personnal-info-modifiable', 'ProfileController@changeMyPersonnalInformation');
    Route::resource('user', 'UserController');
    Route::get('log', 'LogController@index')->name('log.index');

    Route::get('/linkstorage', function () {
        Artisan::call('storage:link');
    });

    Route::get('kadmarketeurs', 'KadmarketingController@kadmarketeurs')->name('Kadmarketeurs.liste');
    Route::get('code-reductions', 'KadmarketingController@codeReductions')->name('Codesreduction.liste');
    Route::post('activatekadmarketeur', 'KadmarketingController@activateKadmarketeur')->name('Kadmarketeurs.activateaccount');
    Route::post('disablekadmarketeur', 'KadmarketingController@desactivateKadmarketeur')->name('Kadmarketeurs.desactivateaccount');


});

Route::get('publicites/dimensionsposition', 'PublicitesController@getPositionDimentions')->name('api.getpubpositiondimentions');

Route::group(['middleware' => ['web']], function () {
	Route::resource('typearticle', 'TypeArticleController');
});

Route::group(['middleware' => ['web']], function () {
	Route::resource('paiement', 'PaiementController');
});