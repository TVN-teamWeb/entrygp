<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Foundation\Auth\RegistersUsers;
use Bestmomo\LaravelEmailConfirmation\Traits\RegistersUsers;


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
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'telephone' => 'required|string|min:7',
            'job_title' => 'required|string',
            'company_name' => 'required|string',
            'type' => 'required',
            'address' => 'required|string',
            'postcode' => 'required|min:3|max:10',
            'city' => 'required|string',
            'country' => 'required',
            'vat' => 'required_without_all:taxId',
            'taxId' => 'required_without_all:vat',
            'website' => 'required|url',
            'privacy' => 'required',
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
            'surname' => $data['surname'],
            'telephone' => $data['telephone'],
            'job_title' => $data['job_title'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
