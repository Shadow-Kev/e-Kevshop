<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CodeReduction extends Model
{
    //
    protected $table = 'kdm_code_reduction';
    protected $fillable = ['code','code_kadmarketeur','statut','beneficiaire','phone_beneficiaire', 'debut_validite', 'fin_validite'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public static function checkCodeStatus($code){
	$d = Carbon::now();
        $code = CodeReduction::where('code',$code)
                        ->where('statut',1)
                        ->where('debut_validite','<=',$d->format('Y-m-d H:i:s'))
                        ->where('fin_validite','>=',$d->format('Y-m-d H:i:s'))
                        ->first();
	 if($code){
                return true;
	 }else{
		return false;
	 }
    }


}
