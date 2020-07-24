<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partenaire extends Model
{
    //
    use SoftDeletes;
    protected $table = 'kdm_partenaires';
    protected $fillable = ['nom_partenaire','contact_partenaire','quantite_produit','url_partenaire','image_partenaire','statut','adresse'];



}
