<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class AuthLock
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {



        if(!$request->user()){
            return $next($request);
         }
         // If the user does not have this feature enabled, then just return next.
         if (!$request->user()->hasLockoutTime()) {

             // Check if previous session was set, if so, remove it because we don't need it here.
             if (session('lock-expires-at')) {
                 session()->forget('lock-expires-at');
             }

             return $next($request);
         }

         if ($lockExpiresAt = session('lock-expires-at')) {
             if ($lockExpiresAt < now()) {
                if (\Route::currentRouteName() === 'login.locked' || \Route::currentRouteName() === 'login.unlock') {
                    return $next($request);
                }
                return redirect()->route('login.locked');
             }
         }

         session(['lock-expires-at' => now()->addMinutes($request->user()->getLockoutTime())]);

         return $next($request);
    }
}
