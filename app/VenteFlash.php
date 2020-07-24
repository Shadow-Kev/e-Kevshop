<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VenteFlash extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kdm_venteflashes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['produit', 'prix_flash', 'date_debut', 'date_fin', 'description', 'slug'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function _produit()
    {
        return $this->belongsTo('App\Produit','produit');
    }

}
