<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kdm_posts';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['post_title', 'post_content', 'post_status', 'post_image','post_cat_id','publication_date','slug'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function categorie()
    {
      return $this->belongsTo(CategoriePosts::class,'post_cat_id','slug');
    }

}
