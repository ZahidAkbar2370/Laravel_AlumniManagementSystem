<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function users()
    {
        $users = User::whereNot("id", [Auth::user()->id])->orderBy("id", "DESC")->get();

        $output = '';

        foreach($users as $user){
            $output .= 
            '<li onclick="reciver_id_session('.$user->id .')">
            <img src="'.$user->image.'" style="width:50px;height:50px" alt="">
            <div>
              <h2>'. $user->name . '</h2>
            </div>
          </li>';

          
        }
        return $output;
    }

    public function userByName($name)
    {
        $users = User::where('name', 'like', '%' . $name . '%')->get();

        $output = '';

        foreach($users as $user){
            $output .= 
            '<li onclick="reciver_id_session('.$user->id .')">
            <img src="'.$user->image.'" style="width:50px;height:50px" alt="">
            <div>
              <h2>'. $user->name . '</h2>
            </div>
          </li>';

          
        }
        return $output;
    }
    public function index($reciver_id)
    {
        $reciver_user_name = User::where("id",$reciver_id)->first();

        $chats = DB::select("SELECT * FROM chats 
        WHERE (sender_id = '". Auth::user()->id ."' 
        AND reciver_id = '".$reciver_id."') 
        OR (sender_id = '".$reciver_id."' 
        AND reciver_id = '". Auth::user()->id ."') 
        ORDER BY id ASC
        ");

        $output = '';
          foreach ($chats as $chat){

          if($chat->sender_id == Auth::user()->id){ 
            $output .= '
            <li class="me">
              <div class="entete">
                <span class="status green"></span>
                <h2>' . Auth::user()->name . '</h2>
                <h3>' . $chat->created_at . '</h3>
              </div>
              <div class="triangle"></div>
              <div class="message">'.
                $chat->message .'
              </div>
            </li>';
        } 
          else if($chat->sender_id == $reciver_id){ 
            $output .= '
          <li class="you">
            <div class="entete">
              <h3>'. $chat->created_at .'</h3>
              <h2>'. $reciver_user_name->name . '</h2>
              <span class="status blue"></span>
            </div>
            <div class="triangle"></div>
            <div class="message">
              '. $chat->message .'
            </div>
          </li>
          ';
          }
        }

        return $output;
              
    }
    public function store(Request $request)
    {
        $sender_id = Auth::user()->id ?? "1";
        $reciver_id = "1";

        Chat::create([
            "sender_id" => $sender_id,
            "reciver_id" => $request->reciver_id,
            "message" => $request->message,
        ]);

        return "Message Saved Successfully";
    }
}
