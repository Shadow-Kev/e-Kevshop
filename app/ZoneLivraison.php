<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZoneLivraison extends Model
{
    //
    protected $table = 'kdm_zonelivraisons';
    protected $fillable = ['nom','description','slug'];

}
