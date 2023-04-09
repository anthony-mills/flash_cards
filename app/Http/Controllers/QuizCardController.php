<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizCardCreateForm;
use App\Models\CardTags;
use App\Providers\Cards\QuestionCard;
use App\Providers\CardTypes\CardFactory;
use App\Models\CardCategories;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
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
     * @param \App\Http\Requests\QuizCardCreateForm $formObj
     *
     * @return RedirectResponse
     **/
    public function saveCard(QuizCardCreateForm $formObj): RedirectResponse
    {
        $formData = $this->cardInstance->formatData($formObj);
        $cardId = $this->cardInstance->save($formData, $formObj->get('tags') ?? []);

        if (is_numeric($cardId)) {
            return redirect(RouteServiceProvider::ADMINHOME)->with('status', 'Quiz card saved successfully.');
        }

        return redirect()->route('cards.cards.create-flash-card')->with('errors', 'Error saving the quiz card.')->withInput();
    }

    /**
     * Edit an existing quiz card
     *
     * @param int $cardId
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function editCard(int $cardId)
    {
        return view(
            'cards.create-quiz-card',
            [
                'existingCats' =>  ( new CardCategories )->getCategories(),
                'cardRow' => $this->cardInstance->get($cardId),
                'cardTags' => CardTags::join('tags', 'card_tags.tag_id', '=', 'tags.id')->where('card_id', $cardId)->get()
            ]
        );
    }

    /**
     * Delete a card from the system
     *
     * @param integer $cardId
     * @return RedirectResponse
     */
    public function deleteCard($cardId): RedirectResponse
    {
        if ($this->cardInstance->delete($cardId)) {
            return redirect(RouteServiceProvider::ADMINHOME)->with('status', 'Successfully deleted the quiz card.');
        }
        return redirect(RouteServiceProvider::ADMINHOME)->with('errors', 'Error deleting the card from the system.');
    }
}
