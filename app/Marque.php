<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marque extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kdm_marques';
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'slug','image', 'displayOnSite','displayOnMenu'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

     public function picture()
    {
      return $this->hasOne(Media::class,'owner','slug');
    }

    public function produits()
    {
      return $this->hasMany(Produits::class, 'marque', 'id');
    }

    public function countProducts()
    {
      return Produit::where('active',1)
                    ->where('deleted_at',null)
                    ->where('marque',$this->id)
                    ->get()
                    ->count();
    }


}
