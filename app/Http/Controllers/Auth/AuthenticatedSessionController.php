<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\Onlineusers;

use Hash;


class AuthenticatedSessionController extends Controller
{


    public function __construct()
{
    $this->middleware('guest')->except([
        'logout',
        'locked',
        'unlock'
    ]);
}
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
       // event(new Onlineusers(Auth::user()));

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function locked()
{
    if(!session('lock-expires-at')){
        return redirect('/');
    }

    if(session('lock-expires-at') > now()){
        return redirect('/');
    }

    return view('auth.lock');
}

public function unlock(Request $request)
{
    $request->validate([
        'password' => 'required|string',
    ]);
    $check = Hash::check($request->input('password'), $request->user()->password);

    if(!$check){
        return redirect()->route('login.locked')->withErrors([
            'Your password does not match your profile.'
        ]);
    }

    session(['lock-expires-at' => now()->addMinutes($request->user()->getLockoutTime())]);

    return redirect('/');
}


}
