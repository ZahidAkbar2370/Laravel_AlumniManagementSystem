<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $allUsers = User::all();

        return view("Admin.User.index", ["allUsers" => $allUsers]);
    }

    public function create()
    {
        return view("Admin.User.create");
    }

    public function store(Request $request)
    {
        $insertUser = new User();
        // $insertUser->name = $request->name;

        $insertUser->save();

        Session::flash("message", "User inserted Successfully");
        return redirect("admin/view-users");
    }

    public function edit($id)
    {
        $editUser = User::find($id);

        return view("Admin.User.edit", compact($editUser));
    }

    public function update(Request $request)
    {
        $id = $request->id;

        $updateUser = User::find($id);
        $updateUser->name = $request->name;

        $updateUser->update();

        Session::flash("message", "User Updated Successfully");
        return redirect("admin/view-users");
    }

    public function destroy($id)
    {
        $deleteUser = User::find($id);

        $deleteUser->delete();

        Session::flash("message", "User Deleted Successfully");
        return redirect("admin/view-users");
    }
}
