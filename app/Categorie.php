<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kdm_categories';
    protected $oraimoId = 18;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'description', 'image', 'slug','displayOnMenu','active','is_categorie_accessoire','ordre'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function picture()
    {
      return $this->hasOne(Media::class,'owner','slug');
    }

    public function produits(){
      return $this->hasMany('App\Produit','categorie');
    }

    public function _parent(){
      return $this->belongsTo('App\Categorie','categorie_parent');
      //return Categorie::find($this->categorie_parent);
    }

    public function _filles(){
      return $this->hasMany('App\Categorie','categorie_parent');
      // $f =  Categorie::where("categorie_parent",$this->id)->get();
      // dd($f);
      // return $f;
    }

    public function allDescendentCats(){
      $catsFilles = $this->_filles()->select(['id'])->where('is_categorie_accessoire',1)->get();
      //dd($catsFilles);
      //$result = $this->produits();
      //dd($catsFilles);
      $result=$catsFilles;
      return $result;
    }

    public function getAllDescendentProducts(){
       //$cats = $this->allDescendentCats();
       //dd($cats->getResults());
      // $catsIds = $cats->select(['id']);

      $data =  $this->_filles()->select(['id'])->where('is_categorie_accessoire',1)->where('categorie_parent', 18)->get();
      //dd($data);
      $d = [];
      foreach ($data as $value) {
        $d[] = $value->id;
      }

      return Produit::whereIn('categorie',$d);
    }

    public function getOraimoAncestors(){
      $ancestors = [];
      do {
        $parent = $this->_parent;
        if(!is_null($parent) && $parent->id != 0  && $parent->id != $this->oraimoId){
          array_unshift($ancestors,$parent->id);
        }
      } while (!is_null($parent) && $parent->id != 0 && $parent->id != $this->oraimoId);
      array_unshift($ancestors, $this->oraimoId);
      return $ancestors;
      
    }

}
