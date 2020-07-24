<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotion extends Model
{
    //

    protected $table = 'kdm_promotions';
    protected $fillable = ['produit', 'prix', 'date_debut', 'date_fin', 'vieux_prix', 'categorie','pourcentage'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function _produit()
    {
        return $this->belongsTo('App\Produit','produit');
    }

    public function _categorie()
    {
        return $this->belongsTo('App\Categorie','categorie');
    }


}
