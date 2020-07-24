<?php

namespace App\Http\Controllers\web;

use App\CodeReduction;
use App\Paiement;
use App\Settings;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RemiseController extends Controller
{
    protected $codeReductionLength = 10;
    protected $pvit_mode_id = 1;
    //

    public function __construct()
    {
      //  $this->middleware('guest');
    }

    public function buyDiscountCode(Request $request){

        if(session()->has('newDiscountCode')){
            $code = session()->get('newDiscountCode');
            $paie = new Paiement();
            $paie->mode_paiement = $this->pvit_mode_id;
            $paie->date = date('Y-m-d H:i:s');
            //$paie->user = 'GUEST';
            $paie->user = session()->getId();
            $paie->id_commande = $code->id;
            $paie->reference = uniqid();
            $paie->statut = 1;
            $paie->type_paiement = 'CODE';

            $paie->save();

            $settings = Settings::where('code','AM_MERCHANT_PHONE')->first();
            session()->forget('newDiscountCode');
            return view('web.payepvit',['commande'=>$code, 'montant'=>200, 'paie'=>$paie,'phone_merchant_am'=>$settings->value]);
        }else{
            return redirect()->back()->withErrors("Aucun code de réduction sélectionné");
        }


    }

    public function generateDiscountCode(Request $request){
        $rules = [
            'nom' => 'required',
            'tel' => ['required','regex:/^0[6,7][0-9]{7}$/']
        ];

        $messages = [
            'nom.required' => 'La nom est obligatoire',
            'tel.required' => 'Le téléphone est obligatoire',
            'tel.regex' => 'Veuillez saisir un numero correct'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            $code = new CodeReduction();
            $code->code = Str::random($this->codeReductionLength);
            $code->code_kadmarketeur = $request->get('code_kadmarketeur');
            $code->statut=0;
            $code->beneficiaire=$request->get('nom');
            $code->phone_beneficiaire=$request->get('tel');

            // Les dates de validités seront renseignés après le paiement au moment du changement de statut

            $code->save();

            session()->put('newDiscountCode', $code);

            return redirect()->back()->with(['newCode'=>$code,"success"=>"Code généré avec succès. Veuillez payer pour l'activer"]);
        }
    }

    public function processReduction(Request $request){
        $validator = Validator::make($request->all(), ['code_reduction'=>'required'], ['code_reduction'=>'Veuillez saisir le code réduction']);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $d = Carbon::now();
            $code = CodeReduction::where('code',$request->code_reduction)
                        ->where('statut',1)
                        ->where('debut_validite','<=',$d->format('Y-m-d H:i:s'))
                        ->where('fin_validite','>=',$d->format('Y-m-d H:i:s'))
                        ->first();
            if($code){
                session()->put('reduction',$code);
                return redirect()->back();
            }else{
                return redirect()->back()->withErrors('Code de réduction incorrect')->withInput();
            }
        }
    }

}
