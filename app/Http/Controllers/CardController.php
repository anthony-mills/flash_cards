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
        return view(
            'cards.landing', 
            [
                'section_name' => 'Prizes'
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
    	$formData = array(
    		'category' => $formObj->get('category'),
    		'problem' => $formObj->get('problem'),
    		'solution' => $formObj->get('solution'), 
    	);

    	$catId = Cards::create( $formData )->id;

    	if ( is_numeric($catId) ) {
			return redirect()->route('home')->with('status', 'Flash card saved successfully.'); 
    	} else {
			return redirect()->route('card.create')->with('error', 'Error saving the flash card.')->withInput(); 
    	} 	
    }     
}
