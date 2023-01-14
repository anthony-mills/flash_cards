<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLogins;
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
    public function listUsers(): \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        return view(
            'users.list',
            [
                'sysUsers' => User::orderBy('id', 'DESC')->paginate(Config::get('flash_cards.results_per_page')),
            ]
        );
    }


    /**
     * User details
     *
     * @param int $userId
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function userDetails(int $userId): \Illuminate\Routing\Redirector|\Illuminate\View\View|\Illuminate\Http\RedirectResponse
    {
        $userDetails = User::where('id', $userId)->first();

        return $userDetails ? view(
            'users.details',
            [
                'user' => $userDetails,
                'logins' => UserLogins::where('user_id', $userId)->orderBy('id', 'DESC')->limit(5)->get()
            ]
        ) : redirect('/admin/dashboard');

    }
}
