<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Login as IlluminateAuthEventsLogin;
use Session;

class LoginSuccessful
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \IlluminateAuthEventsLogin  $event
     * @return void
     */
    public function handle(IlluminateAuthEventsLogin $event)
    {
        Session::flash('login-success', 'Hello ' . $event->user->name . ', welcome back!');

    }
}
