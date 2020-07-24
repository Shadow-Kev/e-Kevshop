<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TarifLivraison extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kdm_tarif_livraisons';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['zone_id', 'mode_id', 'libelle', 'montant', 'duree_livraison','statut'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];


}
