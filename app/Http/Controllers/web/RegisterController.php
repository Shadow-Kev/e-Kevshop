<?php

namespace App\Http\Controllers\web;

use App\User;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use App\Rules\MailOrPhone;
use Hash;
use Illuminate\Support\Facades\Mail;
class RegisterController extends Controller
{
    //

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';





    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('guest');
    }


    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function showRegistrationForm()
    {
        return redirect()->route('client.register');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'r_login' => ['required','unique:kdm_users,username','max:255',new MailOrPhone()],
            'r_name' => 'required|max:255',
            'r_pass' => 'required|min:6|confirmed',
        ],[
            'r_login.unique' => 'Cet identifiant n\'est pas disponible.',
            'r_login.required' => 'L\'identifiant est obligatoire',
            'r_login.max'=>'L\'identifiant ne doit pas exceder 255 charactères',
            'r_name.required' => 'Le nom est obligatoire',
            'r_name.max'=>'Le nom ne doit pas exceder 255 charactères',
            'r_pass.required' => 'Le mot de pass est obligatoire',
            'r_pass.min'=>'Le mot de pass doit contenir au moins 6 charactères',
            'r_pass.confirmed' => 'Les mots de pass ne correspondent pas'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $slug = str_slug('usr');
        $code = $this->generateRandomString();
        return User::create([
            'nom' => $data['r_name'],
            'email' => $data['r_login'],
            'slug' => $slug,
            'statut' => 0,
            'confirm_token' => bcrypt($code),
            'reset_token' => bcrypt($slug.'-'.date('Y-m-d H:i')),
            'role'=>2,
            'username'=>$data['r_login'],
            'activation_code'=>$code,
            'password' => bcrypt($data['r_pass']),
        ]);
    }

    public function registered(Request $request, $user)
    {
        $mes = '';
        $ismail = filter_var($request->r_login, FILTER_VALIDATE_EMAIL);
        if($ismail){
            $headers = "Mime-Version: 1.0\n";
            $headers .= "Content-Type: text/html;charset=UTF-8\n";
            $headers .= "From: ".env('MAIL_USERNAME');
            $message = view('/mail/createAccount', ['user' => $user])->render();
            \mail($user->username,'Creation de compte KADMARKET',$message,$headers);
         /*   Mail::send('/mail/createAccount', ['user' => $user], function($m) use ($user){
				$m->to($user->username)->subject('Creation de compte KADMARKET');
            });  */
            $mes =    "Veuillez consulter votre boite electronique. Un mail vous a ete envoye avec un lien d'activation"; 
        }else{
            $mes = "Derniere etape! Veuillez saisir le code recu pa SMS pour activer votre compte";
            // ENvoie du code par SMS
        }
        return view('web.activation',['page'=>'Success','message_title'=> 'Veuillez activer votre compte','message'=>$mes,'isMail'=>$ismail,'token'=>$user->confirm_token,'username'=>$user->username]);
    }

    public function register(Request $request)
    {

        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
       // $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    public function activateUser($username, $token = '', Request $request)
    {
        try {
            if($username){
                $user = User::where('username',trim($username))->where('statut',0)->first();
                if($user){
                    if($request->has('a_code')){
                        $user->statut          = 1;
                        $user->activation_code = null;
                        $user->save();
                        auth()->login($user);
                    }elseif($token != ''){
                        if(Hash::check($user->activation_code,$token)) {
                            $user->statut          = 1;
                            $user->activation_code = null;
                            $user->save();
                            auth()->login($user);
                        } else {
                            return view('web.error-page',['page'=>'Erreur',"message"=>"Echec d'activation"]);
                        }
                    }else{
                        return view('web.error-page',['page'=>'Erreur','message'=>"Echec d'activation"]);
                    }
                }else{
                    return view('web.error-page',['page'=>'Erreur','message'=>"Utilisateur inconnu"]);
                }
            }else{
                return view('web.error-page',['page'=>'Erreur','message'=>"Utilisateur inconnu."]);

            }
        } catch (\Exception $exception) {
            logger()->error($exception);
            return view('web.error-page',['page'=>'Erreur','message'=>"Whoops! Erreur d'execution"]);
        }
        return redirect()->to('/');
    }

    private function generateRandomString($length = 4) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    


}
