<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rubrique extends Model
{
    //

    protected $table = 'kdm_rubriques';
    protected $fillable = ['titre','ordre','type_affichage','statut'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function produits(){
        return $this->belongsToMany('App\Produit','kdm_rubrique_to_produits','rubrique_id','produit_id')->whereNull('kdm_rubrique_to_produits.deleted_at')->where('kdm_produits.active',1)->withTimestamps();
    }

    public function getProduits()
    {
        return Produits::where('deleted_at',null)->where('active',1)->whereIn('id',$this->produits->pluck('id','id'));
    }

    public function leadproduit(){

       $rp = RubriqueProduits::where('rubrique_id',$this->id)
                        ->where('rubrique_id',$this->id)
                        ->where('is_lead_product',1)
                        ->orderBy('ordre_affichage')
                        ->first();   
        if($rp){
            return Produit::find($rp->produit_id);
        }else{
            return $rp;
        }
    }

}
