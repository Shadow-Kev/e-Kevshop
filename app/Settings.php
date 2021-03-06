<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Settings extends Model
{
    //
    protected $table = 'kdm_setting';
    protected $fillable = ['code', 'value', 'libelle'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
