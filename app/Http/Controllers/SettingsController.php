<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;

class SettingsController extends Controller
{
    //

    public function getSettingsMap(){
    	$result = [];
    	$listSettings = Settings::all();
    	foreach ($listSettings as $value) {
    		$result[$value->code] = $value->value; 
    	}
    	return $result;
    }
}
