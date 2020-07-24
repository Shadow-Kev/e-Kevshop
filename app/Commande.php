<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commande extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kdm_commandes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date', 'user', 'mode_paiement', 'mode_livraison', 'zone_livraison','statut', 'description', 'slug'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];


    public function getModeLivraison()
    {
        return $this->belongsTo(ModeLivraison::class, 'mode_livraison');
    }

    public function modePaiement(){
        return $this->belongsTo(ModePaiement::class,'mode_paiement','id');
    }

    public function zoneLivraison(){
        return $this->belongsTo(ZoneLivraison::class,'zone_livraison','id');
    }

    public function detailsCommande(){
        return $this->hasMany(DetailsCommandes::class,'commandes_id','id');
    }

}
