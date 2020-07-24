<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

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
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ],[
            'name.required' => 'Le nom est obligatoire',
            'name.string'=>'Le nom est composé de charactère',
            'name.max'=>'Le nom ne doit pas exceder 255 charactères',
            'email.required' => 'Le email est obligatoire',
            'email.string'=>'Le email est composé de charactère',
            'email.max'=>'Le email ne doit pas exceder 255 charactères',
            'email.email' =>'Entrez une adresse email valide',
            'email.users' => 'ce adresse email est déja pris',
            'password.required' => 'Le mot de pass est obligatoire',
            'password.string'=>'Le mot de pass doit etre composé de charactère',
            'password.min'=>'Le mot de pass doit contenir au moins 6 charactères',
            'password.confirmed' => 'Les mots de pass ne correspondent pas'
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        
        ]);
    }
}
