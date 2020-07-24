<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    //
    protected $table = 'kdm_panier';
    protected $fillable = ['produit_id','session_id','quantite_produit','user_id'];


    public function produit(){
        return $this->hasOne('App\Produit','id','produit_id');
    }


    public static function user_cart_infos($userid){
        $liste = Panier::where('deleted_at',null)->where('user_id',$userid)->where('statut',1)->get();
        $qteTotal = 0;
        $mnt_total = 0;
        foreach ($liste as $pan) {
            $qteTotal = $qteTotal + $pan->quantite_produit;
            $prod = Produit::find($pan->produit_id);
            $mnt_total += ($pan->quantite_produit * $prod->getFinalPrice());
        }

        return ['qteTotal'=>$qteTotal,'mnt_total'=> $mnt_total];
    }

}
