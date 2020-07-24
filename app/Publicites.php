<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Publicites extends Model
{
    //
    protected $table = 'kdm_publicites';
    protected $fillable = ['libelle','text1','text3','text4', 'date_debut', 'date_fin', 'image', 'statut','position','type_publicite','taille_x','taille_y','link'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
