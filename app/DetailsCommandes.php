<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailsCommandes extends Model
{
    //
    protected $table = 'kdm_details_commandes';
    protected $fillable = ['produit_id','commandes_id','quantite_produit','user_id'];


    public function produit(){
        return $this->hasOne('App\Produit','id','produit_id');
    }

    public function commande(){
        return $this->belongsTo('App\Commande','id','commandes_id');
    }

}
