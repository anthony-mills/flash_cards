<?php

namespace App\Http\Controllers;

use App\Models\Cards;
use App\Models\User;

class AdminController extends Controller
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
     * Show the application dashboard for an learning_resources user.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
        return view(
            'learning_resources.dashboard',
            [
                'userCount' => User::count(),
                'cardCount' => Cards::count()
            ]
        );
    }
}
