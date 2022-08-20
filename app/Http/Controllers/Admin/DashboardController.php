<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlimnusBio;
use App\Models\Career;
use App\Models\Course;
use App\Models\EventCommit;
use App\Models\ForumTopic;
use App\Models\Gallery;
use App\Models\User;
use Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $fourms = ForumTopic::count();
        $jobs = Career::count();
        $alimuns = AlimnusBio::count();
        $courses = Course::count();
        $gallery = Gallery::count();

        return view('Admin.dashboard',[
            "users" => $users,
            "fourms" => $fourms,
            "jobs" => $jobs,
            "alimuns" => $alimuns,
            "gallery" => $gallery,
        ]);
    }
}
