<?php

namespace App\Http\Controllers;

use App\Models\AlimnusBio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $alumni = AlimnusBio::create([
            "firstname" => $request['firstname'],
            "lastname" => $request['lastname'],
            "middlename" => $request['middlename'],
            "gender" => $request['gender'],
            "batch" => $request['batch'],
            "email" => $request['email'],
            "course_id" => $request['course'],
            "connected_to" => ".",
            "avatar" => "https://via.placeholder.com/640x480.png/002233?text=at",
            "status" => "1",
            "type" => $request['type'],
        ]);

        User::create([
            'name' => $request['name'],
            'alumnus_id' => $alumni->id,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('login');
    }
}
