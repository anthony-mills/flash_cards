<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cards;

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
     * Show the application dashboard for an authenticated user.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view(
            'users.dashboard',
            [
                'cardCount' => Cards::count()
            ]
        );
    }

    /**
     * Show the application dashboard for an admin user.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin()
    {
        return view(
            'admin.dashboard',
            [
                'cardCount' => Cards::count()
            ]
        );
    }
}
