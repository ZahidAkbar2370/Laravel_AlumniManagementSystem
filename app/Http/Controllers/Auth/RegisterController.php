<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\AlumniLogin;
use App\Models\AlimnusBio;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";exit;
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'firstname' => ['nullable', "string"],
            'lastname' => ['nullable', "string"],
            'middlename' => ['nullable', "string"],
            'gender' => ['nullable', "string"],
            'batch' => ['nullable', "string"],
            'course' => ['nullable', "string"],
            'type' => ['nullable', "string"],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $alumni = AlimnusBio::create([
            "firstname" => $data['firstname'],
            "lastname" => $data['lastname'],
            "middlename" => $data['middlename'],
            "gender" => $data['gender'],
            "batch" => $data['batch'],
            "email" => $data['email'],
            "cource_id" => $data['course'],
            "connected_to" => "87.7678",
            "avatar" => "https://via.placeholder.com/640x480.png/002233?text=at",
            "status" => "1",
            
        ]);

        return User::create([
            'name' => $data['firstname'],
            'alumnus_id' => $alumni->id,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            "type" => $data['type'],
        ]);
    }
}
