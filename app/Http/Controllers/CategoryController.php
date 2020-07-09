<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CategoryCreateForm;
use App\Models\CardCategories;
use App\Models\Cards;

class CategoryController extends Controller
{

	public function __construct()
	{
	    $this->middleware('auth');
	}	

	/**
	* Display a page for the management of card categories
	*
    * @return \Illuminate\View\View	
	**/
    public function createCategory()
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
        $catName = $formObj->get('name');

    	$formData = [ 'name' => $catName ];

    	$catId = CardCategories::create( $formData )->id;

    	if ( is_numeric($catId) ) {
			return redirect()->route('dashboard')->with('status', 'Saved the new category "' . $catName . '".'); 
    	} else {
			return redirect()->route('category.create')->with('error', 'Error saving the new category.')->withInput(); 
    	} 	
    }

    /**
     * Delete a category from the system
     *
     * @param integer $catId
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Exception If non numeric $catId encountered
     */
    public function deleteCategory( $catId )
    {
    	if (is_numeric($catId)) {
    		$cardCat = CardCategories::where('id', $catId)->first();

    		if ($cardCat) {
    			$catName = $cardCat->name;

    			$cardCat->delete();

    			return redirect()->route('category.list')->with('status', 'Deleted the category "' . $catName . '".'); 
    		} else {
    			return redirect()->route('category.list')->with('error', 'Error deleting the category.'); 
    		}

    	}

    	throw new \Exception('Non numeric category id provided.');
    }

	/**
	* List all of the stored card categories
	*
    * @return \Illuminate\View\View	
	**/
    public function listCategories()
    {
    	$existingCats = ( new CardCategories )->getCategories();

        return view(
            'categories.list', 
            [
            	'existingCats' => $existingCats ?? array()
            ]
        );    	
    }

    /**
     * List all of the cards associated with a category
     *
     * @param integer $catId
     *
     * @return \Illuminate\View\View
     *
     * @throws \Exception If non numeric $catId encountered
     */
    public function getCards( $catId )
    {
    	if (is_numeric($catId)) {
	    	$cardRows = ( new Cards )->getByCat( $catId );

	    	if ( $cardRows ) {
		        return view(
		            'categories.list-cards', 
		            [
		            	'cardRows' => $cardRows
		            ]
		        );	    		
	    	}

	    	return redirect()->route('dashboard')->with('error', 'Category not found.');

        }

        throw new \Exception('Non numeric category id provided.');    	
    }
}
