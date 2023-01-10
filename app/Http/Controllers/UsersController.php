<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Config;

class UsersController extends Controller
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
     * List the system users
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listUsers()
    {
        return view(
            'users.list',
            [
                'sysUsers' => User::orderBy('id', 'DESC')->paginate(Config::get('flash_cards.results_per_page')),
            ]
        );
    }
}
