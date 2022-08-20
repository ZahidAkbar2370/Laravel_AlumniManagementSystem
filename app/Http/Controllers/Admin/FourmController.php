<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ForumTopic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FourmController extends Controller
{
    public function index()
    {
        if(Auth::user()->type == "alumini"){
            $allFourms = ForumTopic::where("user_id", Auth::user()->id)->get();
        }else{
            $allFourms = ForumTopic::all();
        }

        return view("Admin.Fourm.index", ["allFourms" => $allFourms]);
    }

    public function create()
    {
        return view("Admin.Fourm.create");
    }

    public function store(Request $request)
    {
        $insertFourm = new ForumTopic();
        $insertFourm->title = $request->title;
        $insertFourm->user_id = Auth::user()->id ?? "1";
        $insertFourm->description = $request->description;

        $insertFourm->save();

        Session::flash("message", "Fourm inserted Successfully");
        return redirect("admin/view-fourms");
    }

    public function show($id)
    {
        $editFourm = ForumTopic::find($id);

        return view("Admin.Fourm.show", ["editFourm" => $editFourm]);
    }

    public function edit($id)
    {
        $editFourm = ForumTopic::find($id);

        return view("Admin.Fourm.edit", ["editFourm" => $editFourm]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        
        $updateFourm = ForumTopic::find($id);
        $$updateFourm->title = $request->title;
        $updateFourm->description = $request->description;

        $updateFourm->update();

        Session::flash("message", "Fourm Updated Successfully");
        return redirect("admin/view-fourms");
    }

    public function destroy($id)
    {
        $deleteFourm = ForumTopic::find($id);

        $deleteFourm->delete();

        Session::flash("message", "Fourm Deleted Successfully");
        return redirect("admin/view-fourms");
    }
}
