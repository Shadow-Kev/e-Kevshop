<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Caracterique extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kdm_caracteriques';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'valeur', 'produit', 'slug'];

    // use SoftDeletes;
    // protected $dates = ['deleted_at'];

    public function _produit()
    {
        return $this->belongsTo('App\Produit','produit','id');
    }

}
