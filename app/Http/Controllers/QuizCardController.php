<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardCreateForm;
use App\Providers\Cards\QuestionCard;
use App\Providers\CardTypes\CardFactory;
use App\Models\CardCategories;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class QuizCardController extends Controller
{
    private QuestionCard $cardInstance;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->cardInstance = (new CardFactory())->getCardType('QUIZ');
    }

    /**
    * Create a new quiz card
    *
    * @return View
    */
    public function createCard(): View
    {
        return view(
            'cards.create-quiz-card',
            ['existingCats' => ( new CardCategories )->getCategories()]
        );
    }

    /**
     * Store a flash card to the database
     *
     * @param \App\Http\Requests\CardCreateForm $formObj
     *
     * @return RedirectResponse
     **/
    public function saveCard(CardCreateForm $formObj): RedirectResponse
    {
        $formData = $this->cardInstance->formatData($formObj);
        $cardId = $this->cardInstance->save($formData, $formObj->get('tags') ?? []);

        if (is_numeric($cardId)) {
            return redirect(RouteServiceProvider::ADMINHOME)->with('status', 'Quiz card saved successfully.');
        }

        return redirect()->route('cards.cards.create-flash-card')->with('errors', 'Error saving the quiz card.')->withInput();
    }

}
