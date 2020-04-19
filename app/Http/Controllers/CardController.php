<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CardCreateForm;
use App\Models\CardCategories;
use App\Models\Cards;

class CardController extends Controller
{
    public function index()
    {
    	$existingCards = Cards::get();

        return view(
            'cards.landing', 
            [
                'existingCards' => $existingCards ?? array()
            ]
        );    	
    }

    /**
    * Create a new flash card 
    *
    * @return \Illuminate\View\View	
    */
    public function createCard()
    {
    	$this->middleware('auth');

    	$existingCats = ( new CardCategories )->getCategories();

        return view(
            'cards.create', 
            [
                'existingCats' => $existingCats
            ]
        );   
    }

    /**
    * Store a flash card to the database
    *
    * @param \App\Http\Requests\CardCreateForm $formObj
    *     
    * @return \Illuminate\Http\RedirectResponse
    **/
    public function saveCard( CardCreateForm $formObj )
    {
    	$this->middleware('auth');

    	$formData = array(
    		'category' => $formObj->get('category'),
    		'problem' => $formObj->get('problem'),
    		'solution' => $formObj->get('solution'), 
    	);

    	$cardId = Cards::create( $formData )->id;

    	if ( is_numeric($cardId) ) {
			return redirect()->route('home')->with('status', 'Flash card saved successfully.'); 
    	} else {
			return redirect()->route('card.create')->with('error', 'Error saving the flash card.')->withInput(); 
    	} 	
    } 

    /**
    * Delete a card from the system
    *
    * @param integer $cardId
    * @return \Illuminate\Http\RedirectResponse
    **/
    public function deleteCard( $cardId )
    {
    	$this->middleware('auth');

    	if (is_numeric($cardId)) {
    		$cardRow = Cards::where('id', $cardId)->first();

    		if ($cardRow) {
    			$cardRow->delete();

    			return redirect()->route('home')->with('status', 'Successfully deleted the flash card".'); 
    		} else {
    			return redirect()->route('home')->with('error', 'Error deleting the card from the system.'); 
    		}

    	}

    	throw new \Exception('Non numeric card id provided.');
    }    
}
