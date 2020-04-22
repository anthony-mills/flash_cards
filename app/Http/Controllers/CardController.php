<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CardCreateForm;
use App\Http\Requests\CardStartSetForm;

use App\Models\CardCategories;
use App\Models\Cards;

class CardController extends Controller
{
    /**
    * Allow the user to select the card topic they would like to study
    *
    * @return \Illuminate\View\View     
    **/    
    public function beginSet()
    {
        $cardCats = ( new CardCategories )->getCategories();

        return view(
            'cards.start', 
            [
                'cardCats' => $cardCats ?? array(),
                'cardNumber' => [ 10 => 10, 20 => 20, 50 => 50 ]
            ]
        );        
    }

    /**
    * Display the selected flashcard set to the user
    *
    * @param \App\Http\Requests\CardStartSetForm $formObj
    *     
    * @return \Illuminate\View\View     
    **/
    public function showCards( CardStartSetForm $formObj )
    {
        $existingCards = Cards::where( 'category', $formObj->get('category') )
                                ->limit( $formObj->get('card_number') )
                                ->inRandomOrder()
                                ->get();

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
			return redirect()->route('dashboard')->with('status', 'Flash card saved successfully.'); 
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

    			return redirect()->route('dashboard')->with('status', 'Successfully deleted the flash card".'); 
    		} else {
    			return redirect()->route('dashboard')->with('error', 'Error deleting the card from the system.'); 
    		}

    	}

    	throw new \Exception('Non numeric card id provided.');
    }    
}
