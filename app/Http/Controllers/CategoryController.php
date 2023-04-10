<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

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
    * @return Factory|\Illuminate\View\View
    **/
    public function createCategory(): Factory|\Illuminate\View\View
    {
        return view(
            'categories.create',
            []
        );
    }

    /**
    * Store a card category to the database
    *
    * @param CategoryCreateForm $formObj
    *
    * @return RedirectResponse
    **/
    public function saveCategory(CategoryCreateForm $formObj): RedirectResponse
    {
        $catName = $formObj->get('name');

        $formData = [ 'name' => $catName ];

        $catId = CardCategories::create($formData)->id;
        Cache::forget('categories');

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
     * @return RedirectResponse
     *
     * @throws Exception If non-numeric $catId encountered
     */
    public function deleteCategory($catId): RedirectResponse
    {
        if (is_numeric($catId)) {
            $cardCat = CardCategories::where('id', $catId)->first();

            if ($cardCat) {
                $catName = $cardCat->name;

                $cardCat->delete();
                Cache::forget('categories');

                return redirect()->route('category.list')->with('status', 'Deleted the category "' . $catName . '".');
            } else {
                return redirect()->route('category.list')->with('errors', 'Error deleting the category.');
            }
        }

        throw new Exception('Non numeric category id provided.');
    }

    /**
    * List all the stored card categories
    *
    * @return Factory|\Illuminate\View\View
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
     * @param int $typeId
     *
     * @return Application|Factory|View|RedirectResponse
     *
     * @throws Exception If non-numeric $catId encountered
     */
    public function getCards($catId, $typeId = 0): View|Factory|RedirectResponse|Application
    {
        if (is_numeric($catId)) {
            $cardRows = ( new Cards )->getByCat($catId, $typeId);

            if ($cardRows) {
                return view(
                    'categories.list_cards',
                    [
                        'catId' => $catId,
                        'cardRows' => $cardRows,
                        'selectedType' => $typeId
                    ]
                );
            }

            return redirect(RouteServiceProvider::ADMINHOME)->with('errors', 'Category not found.');
        }

        throw new Exception('Non numeric category id provided.');
    }
}
