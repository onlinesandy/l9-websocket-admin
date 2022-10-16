<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class ChatController extends Controller
{
    public function index(Request $request)
    {
        $userlist = User::all()->except(Auth::id());
        $friendship = auth()->user()->getFriendRequests();


        return view('chat',['title'=>'Chat','userlist'=>$userlist,'friendship'=>$friendship]);
    }


}
