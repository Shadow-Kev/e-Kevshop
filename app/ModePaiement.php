<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModePaiement extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kdm_modepaiements';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'description', 'slug', 'icone',];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function picture()
    {
      return $this->hasOne(Media::class,'owner','slug');
    }


}
