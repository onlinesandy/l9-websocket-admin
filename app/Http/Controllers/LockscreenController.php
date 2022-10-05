<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;

class LockScreenController extends Controller
{

    public function lockscreen(){
        session(['lock-expires-at' => now()->subMinutes(5)]);
        return view('auth.lock');

    }

    public function unlockscreen(Request $request){
        $request->validate([
            'password'=>'required|string'
        ]);

       $check = Hash::check($request->password,$request->user()->password);
        if(!$check){
            return redirect()->route('login.locked')->withErrors(['password'=>'Password Not matched']);
        }
        session(['lock-expires-at' => now()->addMinutes($request->user()->getLockoutTime())]);
        return redirect('/dashboard');

    }
}
