<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CategoryCreateForm;
use App\Models\CardCategories;

class CategoryController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}	

	/**
	* Display a page for the managaement of card categories
	*
    * @return \Illuminate\View\View	
	**/
    public function manageCategories()
    {
        return view(
            'categories.create', 
            [
            ]
        );    	
    }

    /**
    * Store a card category to the database
    *
    * @param \App\Http\Requests\CategoryCreateForm $formObj
    *     
    * @return \Illuminate\Http\RedirectResponse
    **/
    public function saveCategory( CategoryCreateForm $formObj )
    {
    	$formData = [ 'name' => $formObj->get('name') ];

    	$catId = CardCategories::create( $formData )->id;

    	if ( is_numeric($catId) ) {
			return redirect()->route('category.create')->with('status', 'Saved the new category.'); 
    	} else {
			return redirect()->route('category.create')->with('error', 'Error saving the new category.')->withInput(); 
    	} 	
    }    
}
