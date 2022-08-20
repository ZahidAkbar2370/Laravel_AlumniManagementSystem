<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{
    public function index()
    {
        $allCourses = Course::all();

        return view("Admin.Course.index", ["allCourses" => $allCourses]);
    }

    public function create()
    {
        return view("Admin.Course.create");
    }

    public function store(Request $request)
    {
        $insertCourse = new Course();
        $insertCourse->course = $request->course_name;

        $insertCourse->save();

        Session::flash("message", "Course inserted Successfully");
        return redirect("admin/view-courses");
    }

    public function edit($id)
    {
        $editCourse = Course::find($id);

        return view("Admin.Course.edit", ["editCourse" => $editCourse]);
    }

    public function update(Request $request)
    {
        $id = $request->id;

        $updateCourse = Course::find($id);
        $updateCourse->course = $request->course_name;

        $updateCourse->update();

        Session::flash("message", "Course Updated Successfully");
        return redirect("admin/view-courses");
    }

    public function destroy($id)
    {
        $deleteCourse = Course::find($id);

        $deleteCourse->delete();

        Session::flash("message", "Course Deleted Successfully");
        return redirect("admin/view-courses");
    }
}
