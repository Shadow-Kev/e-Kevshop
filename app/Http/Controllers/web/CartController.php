<?php

namespace App\Http\Controllers\web;

use App\CodeReduction;
use App\Commande;
use App\DetailsCommandes;
use App\ModeLivraison;
use App\ModePaiement;
use App\Paiement;
use App\Settings;
use App\TarifLivraison;
use App\ZoneLivraison;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Produit;
use  App\Panier;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    //

    public function __construct()
    {

    }

    

   public function liste(){

      // if(Auth::check()){
           $listepanier = Panier::where('deleted_at',null)->where('user_id',session()->getId())->get();
           //$listepanier = Panier::where('deleted_at',null)->where('user_id',Auth::id())->get();

            $page = 'liste-panier';
           $qteTotal = 0;
           $mnt_total = 0;
           foreach ($listepanier as $pan) {
               $qteTotal += $pan->quantite_produit;
               $prod = Produit::find($pan->produit_id);
               $mnt_total += ($pan->quantite_produit * $prod->getFinalPrice());
           }

           return view('web.cart',compact('qteTotal','mnt_total','listepanier','page'));
       /*}else{
           return redirect(route('webLogin'));
       }*/

   }


    private function getCartTotal($cartProductList){
        $total = 0;
        foreach ($cartProductList as $prod) {
           $total = $prod->getFinalPrice();
        }
        return $total;
    }

    public function getNumberInCart($product_id, Request $request){
        $total = 0;
        foreach ($cartProductList as $prod) {
           if($product_id == $prod->id){
               $total++;
           }
        }
        return $total;
    }

    

    //private function isProductSelected()


    
 // REQUETES AJAX

    public function addToCart($productIdTOken, $quantity, Request $request){

        $exp_arr  = explode('-',$productIdTOken);
        //if(Auth::check()){
            if(is_array($exp_arr) && count($exp_arr)> 1){
                $p = Produit::find($exp_arr[1]);
                if($p && $quantity){
                    $cartObj = new Panier();
                    //$exist = Panier::where('user_id',Auth::id())->where('produit_id',$p->id)->get();
                    $exist = Panier::where('user_id',session()->getId())->where('produit_id',$p->id)->get();
                    $actionResult = false;
                    if(count($exist)){
                        $tmp = $exist->first();
                        $tmp->quantite_produit = $tmp->quantite_produit + $quantity;
                        $actionResult = $tmp->save();
                    }else{
                        //$cartObj->user_id = Auth::id();
                        $cartObj->user_id = session()->getId();
                        $cartObj->quantite_produit = $quantity;
                        $cartObj->produit_id = $p->id;
                        $actionResult = $cartObj->save();
                    }

                    if($actionResult){
//                        $liste = Panier::where('deleted_at',null)->where('user_id',Auth::id())->where('statut',1)->get();
                        $liste = Panier::where('deleted_at',null)->where('user_id',session()->getId())->where('statut',1)->get();
                        $qteTotal = 0;
                        $mnt_total = 0;
                        foreach ($liste as $pan) {
                            $qteTotal += $pan->quantite_produit;
                            $prod = Produit::find($pan->produit_id);
                            $mnt_total += ($pan->quantite_produit * $prod->getFinalPrice());
                        }
                        return response()->json(['r'=>true, 'q'=>$qteTotal, 'm'=>$mnt_total]);
                    }
                }
                return response()->json(['r'=>false, 'code'=>'10']);
            }else{
                return response()->json(['r'=>false,'msg'=>'Error params','code'=>'11']);
            }
//        }else{
//            return response()->json(['r'=>false,'msg'=>'session expired','code'=>'12']);
//        }
    }



    public function decreaseQuantity($productIdTOken, $quantity=1, Request $request){

        $exp_arr  = explode('-',$productIdTOken);
        //if(Auth::check()){
            if(is_array($exp_arr) && count($exp_arr)> 1){
                $p = Produit::find($exp_arr[1]);
                if($p && $quantity){
                    $exist = Panier::where('user_id',session()->getId())->where('produit_id',$p->id)->get();
                    //$exist = Panier::where('user_id',Auth::id())->where('produit_id',$p->id)->get();
                    $actionResult = false;
                    if(count($exist)){
                        $tmp = $exist->first();
                        $tmp->quantite_produit = $tmp->quantite_produit - $quantity;
                        if($tmp->quantite_produit <= 1){
                            //Panier::where('user_id',Auth::id())->where('produit_id',$p->id)->delete();
                            Panier::where('user_id',session()->getId())->where('produit_id',$p->id)->delete();
                        }
                        $actionResult = $tmp->save();
                    }

                    //$liste = Panier::where('deleted_at',null)->where('user_id',Auth::id())->where('statut',1)->get();
                    $liste = Panier::where('deleted_at',null)->where('user_id',session()->getId())->where('statut',1)->get();
                    $qteTotal = 0;
                    $mnt_total = 0;
                    foreach ($liste as $pan) {
                        $qteTotal += $pan->quantite_produit;
                        $prod = Produit::find($pan->produit_id);
                        $mnt_total += ($pan->quantite_produit * $prod->getFinalPrice());
                    }
                    return response()->json(['r'=>true, 'q'=>$qteTotal, 'm'=>$mnt_total]);
                }
                return response()->json(['r'=>false, 'code'=>'10']);
            }else{
                return response()->json(['r'=>false,'msg'=>'Error params','code'=>'11']);
            }
        /*}else{
            return response()->json(['r'=>false,'msg'=>'session expired','code'=>'12']);
        }*/
    }


    public function removeFromCart($productIdTOken, Request $request){

        $exp_arr  = explode('-',$productIdTOken);
        //if(Auth::check()){
            if(is_array($exp_arr) && count($exp_arr)> 1){
                $p = Produit::find($exp_arr[1]);
                if($p){
                   //$obj = Panier::where('user_id',Auth::id())
                   $obj = Panier::where('user_id',session()->getId())
                                ->where('produit_id',$p->id)->first();
                   $obj->delete();
                    
                    //$liste = Panier::where('deleted_at',null)->where('user_id',Auth::id())->where('statut',1)->get();
                    $liste = Panier::where('deleted_at',null)->where('user_id',session()->getId())->where('statut',1)->get();
                    $qteTotal = 0;
                    $mnt_total = 0;
                    foreach ($liste as $pan) {
                        $qteTotal += $pan->quantite_produit;
                        $prod = Produit::find($pan->produit_id);
                        $mnt_total += ($pan->quantite_produit * $prod->getFinalPrice());
                    }
                    return response()->json(['r'=>true, 'q'=>$qteTotal, 'm'=>$mnt_total]);
                }
                return response()->json(['r'=>false, 'code'=>'10','msg'=>"produit inexistant"]);
            }else{
                return response()->json(['r'=>false,'msg'=>'Error params','code'=>'11']);
            }
        /*}else{
            return response()->json(['r'=>false,'msg'=>'session expired','code'=>'12']);
        }*/
    }

    public function choixLivraison(Request $request){
        //$infosPanier = Panier::user_cart_infos(Auth::id());
        $infosPanier = Panier::user_cart_infos(session()->getId());
        if($infosPanier['qteTotal']){
            $zonesLivraisons = ZoneLivraison::where('deleted_at',null)->where('statut',1)->get();
            $modeLivraison =  ModeLivraison::where('deleted_at',NULL)->where('statut',1)->get();
            return view("web.livraison",['page'=>'livraison-commande', 'zonesLivraisons'=> $zonesLivraisons,'modeLivraison'=>$modeLivraison]);
        }else{
            return  redirect()->to("/panier");
        }

    }

    public function processLivraison(Request $request){

        $rules = [
            'zonelivraison' => 'required',
            'nom_receveur' => 'required',
            'modelivraison' => 'required',
            'contact' => 'required',
            'description_supplementaire' => 'required',
        ];

        $messages = [
            'zonelivraison.required' => 'La zone de livraison est obligatoire',
            'nom_receveur.required' => 'Le nom du receveur est obligatoire',
            'modelivraison.required' => 'Veuillez choisir un mode de livraison',
            'contact.required' => 'Contact obligatoire',
            'description_supplementaire.required' => 'Description supplémentaire du lieu de retrait obligatoire'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $request->session()->put('livraison',$request->all());
            return redirect()->to('/methods');
        }

    }

    public function listeMethods(Request $request){
        $methodes = ModePaiement::where('statut',1)->where('deleted_at',null)->get();
        return view("web.modepaiement",['page'=>'modepaie-commande', 'methodes'=>$methodes]);
    }


    public function processMethodPaiement(Request $request){
        /*methode_choisie*/
        if(session()->has('livraison')) {

            $rules = [
                'methode_choisie' => 'required'
            ];

            $messages = [
                'methode_choisie.required' => 'Veuilez choisir un mode de règlement'
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                $reglement = ModePaiement::find($request->get('methode_choisie'));
                $request->session()->put('reglement', $reglement);
                return redirect()->to('/confirmation');
            }
        }else{
            return  redirect()->to("/panier");
        }

    }


    public function confirmation(Request $request){
        if(session()->has('reglement') && session()->has('livraison')){
            //$panier = Panier::where('user_id',Auth::id())->where('statut',1)->get();
            $panier = Panier::where('user_id',session()->getId())->where('statut',1)->get();
            $modeReglement = $request->session()->get('reglement');
            $livraison = $request->session()->get('livraison');
            $tarif = $this->getDeliveryCost($livraison['zonelivraison'], $livraison['modelivraison']);
            return view("web.confirmation",['page'=>'confirm-commande','panier'=>$panier,'tarif'=>$tarif,'reglement'=>$modeReglement, 'livraison'=>$livraison]);
        }else{
            return  redirect()->to("/panier");
        }
    }

    public function getDeliveryCost($zone, $mode){
        $tarif = TarifLivraison::where('zone_id',$zone)->where('mode_id',$mode)->first();
        return $tarif;
    }

    public function proceedCheckout(Request $request){

        /*création de la commande*/
        $reg = $request->session()->get('reglement');
        $liv = $request->session()->get('livraison');
        //$infosPanier = Panier::user_cart_infos(Auth::id());
        $infosPanier = Panier::user_cart_infos(session()->getId());
        //dd($infosPanier);
        $cmd = new Commande();
        $cmd->date = date('Y-m-d H:i:s');
        //$cmd->user = Auth::id();
        $cmd->user = session()->getId();
        $cmd->mode_paiement = $reg->id;
        $cmd->mode_livraison = $liv['modelivraison'];
        $cmd->zone_livraison = $liv['zonelivraison'];
        $cmd->montant_total = $infosPanier['mnt_total'];
        $cmd->montant_a_payer = $infosPanier['mnt_total'];
        $cmd->statut = 1;
        $cmd->description_livraison = $liv['description_supplementaire'];
        $cmd->nom_receveur = $liv['nom_receveur'];
        $cmd->tel_receveur = $liv['contact'];
        $cmd->slug = uniqid();

        if(session()->has('reduction')){
            $code = session()->get('reduction');
            if(CodeReduction::checkCodeStatus($code->code)){
                $cmd->code_remise = $code->code;
                session()->forget('reduction');
            };
        }
        $cmd->save();

        //$panier = Panier::where('user_id',Auth::id())->where('statut',1)->get();
        $panier = Panier::where('user_id',session()->getId())->where('statut',1)->get();
        foreach ($panier as $p){
            $detail = new DetailsCommandes();
            $detail->commandes_id = $cmd->id;
            $detail->produit_id = $p->produit_id;
            $detail->quantite_produit = $p->quantite_produit;
            $detail->statut = $cmd->statut;
            $detail->save();
        }
        $paie = new Paiement();
        $paie->mode_paiement = $reg->id;
        $paie->date = date('Y-m-d H:i:s');
        $paie->user = session()->getId();
        //$paie->user = Auth::id();
        $paie->id_commande = $cmd->id;
        $paie->reference = uniqid();
        $paie->statut = 1;

        $paie->save();
        //Panier::where('user_id',session()->getId())->where('statut',1)->delete();
        //Panier::where('user_id',Auth::id())->where('statut',1)->delete();
        //$request->session()->forget('reglement');
        //$request->session()->forget('livraison');

        $settings = Settings::where('code','AM_MERCHANT_PHONE')->first();
        return view('web.checkoutsuccess',['commande'=>$cmd, 'paie'=>$paie,'phone_merchant_am'=>$settings->value]);


    }

    public function callback(){
        $data_received=file_get_contents("php://input");
        $data_received_xml=new \SimpleXMLElement($data_received);
        $ligne_response=$data_received_xml[0];
        $reference_received=$ligne_response->REF;
        $statut_received=$ligne_response->STATUT;
//        $client_received=$ligne_response->TEL_CLIENT;
//        $type_received=$ligne_response->TYPE;

        $trx = Paiement::where('reference',$reference_received)->where('statut',1)->first();
         if($trx){
             if($statut_received == 200){
                 $trx->statut = 2;
                 $trx->save();
                 if($trx->type_paiement == 'CODE'){
                     $code = CodeReduction::where('id',$trx->id_commande)->first();
                     if($code){
                         $code->statut = 1;
                         $d = new \DateTime();
                         $code->debut_validite = $d->format('Y-m-d H:i:s');
                         $interval = new \DateInterval('P30D');
                         $code->fin_validite = $d->add($interval)->format('Y-m-d H:i:s');
                         $code->save();
                     }
                 }elseif($trx->type_paiement == 'PANIER'){

                     $cmd = Commande::where('id',$trx->id_commande)->first();
                     if($cmd){
                         $cmd->statut = 2;
                         $cmd->save();
                         if($cmd->code_remise != null){
                             CodeReduction::where('code',$cmd->code_remise)->update(['statut'=>2]);
                         }
                     }
                 }
             }else{
                 $trx->statut = 0;
                 $trx->save();
                 if($trx->type_paiement == 'CODE'){
                     //echo 'failed  CODE';
                 }elseif($trx->type_paiement == 'PANIER'){
                     //echo 'failed  PANIER';
                     $cmd = Commande::where('id',$trx->id_commande)->first();
                     if($cmd){
                         $cmd->statut = 0;
                         $cmd->save();
                     }
                 }
             }
         }else{
             echo 'not found';
         }

    }
}
