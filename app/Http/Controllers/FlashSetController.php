<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\CardStartSetForm;

use App\Models\CardCategories;
use App\Models\Cards;

class FlashSetController extends Controller
{
    /**
    * Allow the user to select the card topic they would like to study
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    **/
    public function beginSet()
    {
        $cardCats = ( new CardCategories )->getCategories();

        return view(
            'flashsets.start',
            [
                'cardCats' => $cardCats ?? array(),
                'cardNumber' => [ 10 => 10, 20 => 20, 50 => 50 ],
                'difficultyLvl' => [ 0 => 'All', 1, 2, 3, 4, 5 ]
            ]
        );
    }

    /**
    * Display the selected flashcard set to the user
    *
    * @param \App\Http\Requests\CardStartSetForm $formObj
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    **/
    public function showCards(CardStartSetForm $formObj)
    {
        $cardCat = $formObj->get('category');
        $cardLevel = $formObj->get('difficulty');

        $cardQuery = Cards::inRandomOrder()->limit($formObj->get('card_number'));

        if ($cardLevel > 0) {
            $cardQuery->where('difficulty', $cardLevel);
        }

        if (is_numeric($cardCat)) {
            $cardQuery->where('category', $cardCat);
        }

        $cardSet = $cardQuery->get();

        return view(
            'flashsets.show_cards',
            [
                'existingCards' => count($cardSet) > 2 ? $cardSet : Cards::inRandomOrder()->limit($formObj->get('card_number'))->get()
            ]
        );
    }
}
