<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\CategoryCreateForm;
use App\Models\CardCategories;
use App\Models\Cards;
use App\Models\Resources;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    * Display a page for the management of card categories
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    **/
    public function createCategory()
    {
        return view(
            'categories.create',
            []
        );
    }

    /**
    * Store a card category to the database
    *
    * @param \App\Http\Requests\CategoryCreateForm $formObj
    *
    * @return \Illuminate\Http\RedirectResponse
    **/
    public function saveCategory(CategoryCreateForm $formObj)
    {
        $catName = $formObj->get('name');

        $formData = [ 'name' => $catName ];

        $catId = CardCategories::create($formData)->id;

        if (is_numeric($catId)) {
            return redirect(RouteServiceProvider::ADMINHOME)->with('status', 'Saved the new category "' . $catName . '".');
        } else {
            return redirect()->route('category.create')->with('errors', 'Error saving the new category.')->withInput();
        }
    }

    /**
     * Delete a category from the system
     *
     * @param integer $catId
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Exception If non-numeric $catId encountered
     */
    public function deleteCategory($catId)
    {
        if (is_numeric($catId)) {
            $cardCat = CardCategories::where('id', $catId)->first();

            if ($cardCat) {
                $catName = $cardCat->name;

                $cardCat->delete();

                return redirect()->route('category.list')->with('status', 'Deleted the category "' . $catName . '".');
            } else {
                return redirect()->route('category.list')->with('errors', 'Error deleting the category.');
            }
        }

        throw new \Exception('Non numeric category id provided.');
    }

    /**
    * List all the stored card categories
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    **/
    public function listCategories()
    {
        $existingCats = ( new CardCategories )->getCategories(1);

        return view(
            'categories.list',
            [
                'existingCats' => $existingCats ?? array(),
                'resourceCounts' => Resources::select(['category', DB::raw("COUNT(*) as count")])->groupBy('category')->get()
            ]
        );
    }

    /**
     * List all the cards associated with a category
     *
     * @param int $catId
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     *
     * @throws \Exception If non-numeric $catId encountered
     */
    public function getCards($catId)
    {
        if (is_numeric($catId)) {
            $cardRows = ( new Cards )->getByCat($catId);

            if ($cardRows) {
                return view(
                    'categories.list-cards',
                    [
                        'cardRows' => $cardRows
                    ]
                );
            }

            return redirect(RouteServiceProvider::ADMINHOME)->with('errors', 'Category not found.');
        }

        throw new \Exception('Non numeric category id provided.');
    }
}
