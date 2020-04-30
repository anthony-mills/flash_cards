<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ChangePasswordController extends Controller
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
    * Display a form so the user can change their login password
    *
    **/
    public function changePassword()
    {
        return view(
            'auth.change-password',
            [

            ]
        );
    }

    /**
    * Update the password for a user
    *
    **/
    public function updatePassword()
    {

    }
}