<?php

namespace App\Listeners;

use App\Models\UserLogins;
use Illuminate\Auth\Events\Login;

class LogSuccessfulLogin
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
     * Store the login details of the user
     *
     * @param Login $event
     *
     * @return void
     */
    public function handle(Login $event) : void
    {
        UserLogins::create([
            'user_id' => $event->user->getAuthIdentifier(),
            'ip' => request()->ip(),
            'user_agent' => request()->header('user-agent')
        ]);
    }
}
