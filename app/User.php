<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom','prenom', 'email', 'password','username','role','statut','slug','remember_token','confirm_token','reset_token','shop_id','activation_code'
    ];
    protected $table = 'kdm_users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    



    public function roles()
    {
      return $this->hasOne(Role::class,'id','role');
    }

    public function picture()
    {
        return $this->hasOne(Media::class,'owner','slug');
    }

    public function shop(){
      return $this->belongsTo('App\Shop','shop_id');
    }



    private function checkIfUserHasRole($need_role)
    {
        return (strtolower($need_role)==strtolower($this->roles->name)) ? true : null;
    }


   public function hasRole($roles)
   {
       if (is_array($roles))
       {
           foreach ($roles as $need_role)
           {
               if ($this->checkIfUserHasRole($need_role))
               {
                   return true;
               }
           }
       } else{
           return $this->checkIfUserHasRole($roles);
       }
       return false;
   }

   public function monPanier(){
       return $this->hasMany('App\Panier','user_id','produit_id');
   }
}
