<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produit extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kdm_produits';
    protected $newProductDelay = 432000 ; // 5 jours * 24h * 3600 secondes

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'prix','prix_achat','prix_reduit', 'quantite', 'shop', 'marque', 'categorie', 'garantie', 'description', 'slug','active','visite','lien_details_constructeur'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function categorie_()
    {
        return $this->belongsTo('App\Categorie', 'categorie');
    }

     public function _categorie()
    {
        return $this->belongsTo('App\Categorie', 'categorie','id');
    }

    public function marque_()
    {
        return $this->belongsTo('App\Marque', 'marque');

    }


    public function marcopolo()
    {
        return $this->belongsTo('App\Marque', 'marque','id');

    }

    public function comments_()
    {
        return $this->hasMany(Image::class, '');
    }


    public function commandes_()
    {
        return $this->belongsToMany(Commande::class, 'role_user_table');
    }


    public function ventes_()
    {
        return $this->belongsToMany(Vente::class, 'role_user_table');
    }


    public function shop_()
    {
        return $this->belongsTo(Shop::class, 'shop');
    }

    public function picture()
    {
      return $this->hasOne(Media::class,'owner','slug');
    }

    public function images(){
      return $this->belongsToMany(Media::class,'kdm_produits_to_images','id_produits', 'id_images');
    }

    public static function getNewProducts($categorie=1, $limit= 10)
    {
        return Produit::where("categorie","=",$categorie)->paginate($limit);
    }

    public function getFinalPrice(){
        $taux_object = Settings::where('code','=','TAUX_COMMISSION_KADMARKET')->first();
        $taux_kadmarket = $taux_object->value ? floatval($taux_object->value) : 10;

        $promos_produit = Promotion::where('deleted_at',null)
                            ->where('date_debut','<=',date('Y-m-d H:i'))
                            ->where('date_fin','>=',date('Y-m-d H:i'))
                            ->where('produit',$this->id)
                            ->orderBy('created_at','desc')
                            ->get();

        $promos_categorie = Promotion::where('deleted_at',null)
                            ->where('date_debut','<=',date('Y-m-d H:i'))
                            ->where('date_fin','>=',date('Y-m-d H:i'))
                            ->where('categorie',$this->categorie)
                            ->orderBy('created_at','desc')
                            ->get();
        $kad_boutique =  Settings::where('code','=','KADM_SHOP_ID')->first();


        if($promos_produit->count()){
            $p = $promos_produit->first();
            return $p->prix;
        }else if($this->shop = $kad_boutique){
            if(session()->has('reduction')){
                $tauxreduction =  Settings::where('code','=','TAUX_REDUCTION')->first();
                return $this->prix *  ((100 - $tauxreduction->value)/100);
            }
            return $this->prix;
        }else if( $promos_categorie->count()){
            $p = $promos_categorie->first();
            return round($this->prix * (($p->pourcentage / 100) + 1) ) ;
        
        }else{
            return round($this->prix * (($taux_kadmarket / 100) + 1) );
        }

    }

    public function getNonPromoPrice(){
        $taux_object = Settings::where('code','=','TAUX_COMMISSION_KADMARKET')->first();
        $taux_kadmarket = $taux_object->value ? floatval($taux_object->value) : 10;

        return round($this->prix * (($taux_kadmarket / 100) + 1) ) ;
    }

    public function getShopPrice()
    {
        return $this->prix;
    }

    public function isNewProduct(){
        $d1 = date_create();
        $d2 = date_create($this->created_at);

        return (strtotime(date('Y-m-d H:i')) - strtotime($this->created_at) < $this->newProductDelay);
    }

    public function getDevise(){
        return 'XAF';
    }

    public function enStock()
    {
        return $this->quantite > 0;
    }

    public function caracteristiques(){
        return $this->hasMany('App\Caracterique','produit')->where('deleted_at',null);
    }


    public function isPromo(){
        $promos_produit = Promotion::where('deleted_at',null)
                            ->where('date_debut','<=',date('Y-m-d H:i'))
                            ->where('date_fin','>=',date('Y-m-d H:i'))
                            ->where('produit',$this->id)
                            ->orderBy('created_at','desc')
                            ->get();

        $promos_categorie = Promotion::where('deleted_at',null)
                            ->where('date_debut','<=',date('Y-m-d H:i'))
                            ->where('date_fin','>=',date('Y-m-d H:i'))
                            ->where('categorie',$this->categorie)
                            ->orderBy('created_at','desc')
                            ->get();

        return $promos_categorie->count() || $promos_produit->count();
    }
}
