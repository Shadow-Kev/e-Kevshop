<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  
class RubriqueProduits extends Model
{
    //
    
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'kdm_rubrique_to_produits';
    protected $fillable = ['produit_id', 'rubrique_id', 'statut','ordre','is_lead_product'];
    // use SoftDeletes;
    // protected $dates = ['deleted_at'];

    public function produit()
    {
        return $this->hasOne('App\Produit','produit_id');
    }

    public function rubrique()
    {
        return $this->hasOne('App\Rubrique','rubrique_id');
    }
}
