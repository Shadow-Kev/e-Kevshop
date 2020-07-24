<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CategoriePosts extends Model
{
    //
      /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kdm_post_cats';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cat_libelle', 'cat_status', 'cat_image'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];


    public function posts(){
      return $this->hasMany('App\Posts','post_cat_id');
    }

}
