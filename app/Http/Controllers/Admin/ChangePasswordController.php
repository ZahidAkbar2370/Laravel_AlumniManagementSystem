<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function changePassword()
    {
        return view("Admin.ChangePassword.change_password");
    }

    public function password(Request $request)
    {
        $id = Auth::user()->id ?? "1";

        $user = User::find($id);

        $checkPassword = Hash::Check($request->naw_password, $user->password);

        if($checkPassword){
            echo "password";
        }

        echo "invalid";
    }
}
