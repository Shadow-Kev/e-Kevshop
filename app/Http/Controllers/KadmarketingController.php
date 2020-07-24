<?php

namespace App\Http\Controllers;

use App\CodeReduction;
use App\Commande;
use App\User;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class KadmarketingController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $apropos_id = 1;
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');
    }

    public function kadmarketeurs(Request $request){

        $kadmarketeurs = User::where('deleted_at',null)
            ->where('role',5)
            ->orderBy('nom','asc')->get();
        return view('kadmarketing.kadmarketeurs',compact('kadmarketeurs'));
    }

    public function codeReductions(Request $request){

        $codes = CodeReduction::where('deleted_at',null)->orderBy('created_at','desc')->get();
        return view('kadmarketing.code_reduction',compact('codes'));
    }

    public function activateKadmarketeur(Request $request){
        $id = $request->get('kdm');
        $user = User::findOrFail($id);
        $res = $user->update(array('statut'=>1, 'activate_kadmarketing'=>1,'role'=>5));
        return array("res" => $res);
    }

    public function desactivateKadmarketeur(Request $request){
        $id = $request->get('kdm');
        $user = User::findOrFail($id);
        $res = $user->update(array('statut'=>0, 'activate_kadmarketing'=>0));
        return array("res" => $res);
    }
}
