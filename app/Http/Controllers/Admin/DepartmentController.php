<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();

        return view("Admin.Department.index", ["departments" => $departments]);
    }

    public function create()
    {
        return view("Admin.Department.create");
    }

    public function store(Request $request)
    {
        $insertGallery = new Department();
        $insertGallery->hod_name = $request->hod_name;
        $insertGallery->department_name = $request->department_name;
        $insertGallery->image = $request->image_url;

        $insertGallery->save();

        Session::flash("message", "Department inserted Successfully");
        return redirect("admin/view-departments");
    }

    public function destroy($id)
    {
        $deleteGallery = Department::find($id);

        $deleteGallery->delete();

        Session::flash("message", "Department Deleted Successfully");
        return redirect("admin/view-departments");
    }
}
