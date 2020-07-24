<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kdm_images';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'alt', 'slug','url','description','owner','shop_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
