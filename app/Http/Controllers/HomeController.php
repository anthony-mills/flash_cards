<?php

namespace App\Http\Controllers;

use App\Models\SavedCards;
use App\Providers\CardTypes\CardTypes;
use Illuminate\Http\Request;

use App\Models\Cards;
use Illuminate\Support\Facades\Auth;

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
        $savedCards = (new SavedCards())->cardsByType(Auth::id());
        $cardCount = $savedCards->mapWithKeys(function ($item) { return [CardTypes::keyById($item->type) => $item->count]; });
        $savedCards = $savedCards->map(function ($item) {
            return $item->count . " " . CardTypes::nameById($item->type, true);
        });
        $cardMsg = ($savedCards->count() > 0) ? $savedCards->join(", ", " & ") . " saved for review." : "No cards saved for review.";

        return view(
            'users.dashboard',
            [
                'cardMsg' => $cardMsg,
                'cardCount' => $cardCount
            ]
        );
    }

    /**
     * Show the application dashboard for an learning_resources user.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin()
    {
        return view(
            'learning_resources.dashboard',
            [
                'cardCount' => Cards::count()
            ]
        );
    }
}
