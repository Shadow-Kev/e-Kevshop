<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PubsPositions extends Model
{
     //
     protected $table = 'kdm_pubspositions';
     protected $fillable = ['libelle'];
 
     use SoftDeletes;
     protected $dates = ['deleted_at'];
}
