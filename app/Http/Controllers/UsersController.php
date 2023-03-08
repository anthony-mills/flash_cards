<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLogins;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;

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
     * @return Factory|View
     */
    public function listUsers(): Factory|View
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
     * @return Redirector|View|RedirectResponse
     */
    public function userDetails(int $userId): Redirector|View|RedirectResponse
    {
        $userDetails = User::where('id', $userId)->first();

        return $userDetails ? view(
            'users.details',
            [
                'user' => $userDetails,
                'logins' => UserLogins::where('user_id', $userId)->orderBy('id', 'DESC')->limit(5)->get()
            ]
        ) : redirect('/learning_resources/dashboard');

    }
}
