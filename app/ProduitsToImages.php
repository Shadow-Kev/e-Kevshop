<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProduitsToImages extends Model
{
    //
    protected $table = 'kdm_produits_to_images';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_produits', 'id_images', 'statut', 'ordre'];


    
}
