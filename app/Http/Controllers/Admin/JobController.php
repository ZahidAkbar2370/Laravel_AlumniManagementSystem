<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {
        if(Auth::user()->type == "alumini"){
            $allJobs = Career::where("user_id", Auth::user()->id)->get();
        }else{
            $allJobs = Career::all();
        }
        

        return view("Admin.Job.index", ["allJobs" => $allJobs]);
    }

    public function create()
    {
        return view("Admin.Job.create");
    }

    public function store(Request $request)
    {
        $insertJob = new Career();
        $insertJob->job_title = $request->job_title;
        $insertJob->company = $request->company_name;
        $insertJob->location = $request->location;
        $insertJob->description = $request->description;
        $insertJob->user_id = Auth::user()->id ?? "1";

        $insertJob->save();

        Session::flash("message", "Job inserted Successfully");
        if(!empty(Auth::user()) && Auth::user()->role == "alumini"){
            return redirect("admin/view-jobs");
        }
        
        return redirect("admin/view-jobs");
    }

    public function show($id)
    {
        $showJob = Career::find($id);

        return view("Admin.Job.show", ["showJob" => $showJob]);
    }

    public function edit($id)
    {
        $editJob = Career::find($id);

        return view("Admin.Job.edit", ["editJob" => $editJob]);
    }

    public function update(Request $request)
    {
        $id = $request->id;

        $updateJob = Career::find($id);
        $updateJob->job_title = $request->job_title;
        $updateJob->company = $request->company_name;
        $updateJob->location = $request->location;
        $updateJob->description = $request->description;

        $updateJob->update();

        Session::flash("message", "Job Updated Successfully");
        return redirect("admin/view-jobs");
    }

    public function destroy($id)
    {
        $deleteJob = Career::find($id);

        $deleteJob->delete();

        Session::flash("message", "Job Deleted Successfully");
        return redirect("admin/view-jobs");
    }
}
