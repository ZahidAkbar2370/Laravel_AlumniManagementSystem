<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->type == "admin"){
            return redirect('admin\dashboard');
        }
        else if(Auth::user()->type == "alumini"){
            return redirect('admin\view-events');
        }
        else{
            return redirect('/');
        }
        // return view('home');
    }
}
