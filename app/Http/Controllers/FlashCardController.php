<?php

namespace App\Http\Controllers;

use App\Providers\Cards\FlashCard;
use App\Providers\Cards\QuestionCard;
use App\Providers\CardTypes\CardFactory;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests\CardCreateForm;
use App\Models\CardCategories;
use App\Models\CardTags;
use App\Models\Tags;
use Illuminate\View\View;

class FlashCardController extends Controller
{
    private FlashCard|QuestionCard $cardInstance;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->cardInstance = (new CardFactory())->getCardType('FLASH');
    }

    /**
    * Create a new flash card
    *
    * @return View
    */
    public function createCard(): View
    {
        return view(
            'cards.create-flash-card',
            ['existingCats' => ( new CardCategories )->getCategories()]
        );
    }

    /**
    * Edit an existing flash card
    *
    * @param int $cardId
    *
    * @return RedirectResponse|View
    */
    public function editCard(int $cardId)
    {
        return view(
            'cards.create-flash-card',
            [
                'existingCats' =>  ( new CardCategories )->getCategories(),
                'cardRow' => $this->cardInstance->get($cardId),
                'cardTags' => CardTags::join('tags', 'card_tags.tag_id', '=', 'tags.id')->where('card_id', $cardId)->get()
            ]
        );
    }

    /**
    * Store a flash card to the database
    *
    * @param \App\Http\Requests\CardCreateForm $formObj
    *
    * @return RedirectResponse
    **/
    public function saveCard(CardCreateForm $formObj)
    {
        $formData = $this->cardInstance->formatData($formObj);
        $cardId = $this->cardInstance->save($formData, $formObj->get('tags') ?? []);

        if (is_numeric($cardId)) {
            return redirect(RouteServiceProvider::ADMINHOME)->with('status', 'Flash card saved successfully.');
        }

        return redirect()->route('cards.cards.create-flash-card')->with('errors', 'Error saving the flash card.')->withInput();
    }

    /**
     * Delete a card from the system
     *
     * @param integer $cardId
     * @return RedirectResponse
     *
     * @throws \Exception if not numeric $cardId
     */
    public function deleteCard($cardId)
    {
        if ($this->cardInstance->delete($cardId)) {
            return redirect(RouteServiceProvider::ADMINHOME)->with('status', 'Successfully deleted the flash card.');
        } else {
            return redirect(RouteServiceProvider::ADMINHOME)->with('errors', 'Error deleting the card from the system.');
        }
    }

    /**
    * Return a JSON array of all stored card tags
    *
    * @return \Illuminate\Http\JsonResponse
    **/
    public function getTags()
    {
        return response()->json(Tags::all(['id', 'tag']), 200);
    }
}
