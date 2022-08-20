<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    public function index()
    {
        if(Auth::user()->type == "alumini"){
            $allEvents = Event::where("user_id", Auth::user()->id)->get();
        }else{
            $allEvents = Event::all();
        }
       

        return view("Admin.Event.index", ["allEvents" => $allEvents]);
    }

    public function create()
    {
        return view("Admin.Event.create");
    }

    public function store(Request $request)
    {
        $insertEvent = new Event();
        $insertEvent->title = $request->title;
        $insertEvent->user_id = Auth::user()->id;
        $insertEvent->schedule = $request->schedule;
        $insertEvent->banner = $request->banner;
        $insertEvent->content = $request->content;

        $insertEvent->save();

        Session::flash("message", "Event inserted Successfully");
        return redirect("admin/view-events");
    }

    public function show($id)
    {
        $showEvent = Event::find($id);

        return view("Admin.Event.show", ["showEvent" => $showEvent]);
    }

    public function edit($id)
    {
        $editEvent = Event::find($id);

        return view("Admin.Event.edit", ["editEvent" => $editEvent]);
    }

    public function update(Request $request)
    {
        $id = $request->id;

        $updateEvent = Event::find($id);
        $updateEvent->title = $request->title;
        $updateEvent->schedule = $request->schedule;
        // $updateEvent->banner = $request->banner;
        $updateEvent->content = $request->content;

        $updateEvent->update();

        Session::flash("message", "Event Updated Successfully");
        return redirect("admin/view-events");
    }

    public function destroy($id)
    {
        $deleteEvent = Event::find($id);

        $deleteEvent->delete();

        Session::flash("message", "Event Deleted Successfully");
        return redirect("admin/view-events");
    }
}
