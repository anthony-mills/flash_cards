<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\ResourceCreateForm;

use App\Models\CardCategories;
use App\Models\Resources;

class ResourceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show view for the creation of a new learning resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createResource()
    {
        return view(
            'resources.create',
            [
                'existingCats' => ( new CardCategories )->getCategories(),
            ]
        );
    }

    /**
    * Store a learning resource to the database
    *
    * @param ResourceCreateForm $formObj
    *
    * @return \Illuminate\Http\RedirectResponse
    **/
    public function saveResource(ResourceCreateForm $formObj)
    {
        $formData = array(
            'id' => ($formObj->get('resource_id') ?? null),
            'category' => $formObj->get('category'),
            'link' => $formObj->get('link'),
            'description' => $formObj->get('description'),
        );

        Resources::upsert( $formData, 'id' );

        $resourceId = (is_numeric($formData['id'])) ? $formData['id'] : DB::getPdo()->lastInsertId();

        if (is_numeric($resourceId)) {
            return redirect(RouteServiceProvider::ADMINHOME)->with('status', 'Learning resource saved successfully.');
        } else {
            return redirect(RouteServiceProvider::ADMINHOME)->with('errors', 'Error saving the learning resource.')->withInput();
        }
    }

    /**
    * Edit an existing learning resource
    *
    * @param integer $resourceId
    *
    * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
    */
    public function editResource($resourceId)
    {
        $existingCats = ( new CardCategories )->getCategories();

        $dbRow = Resources::where('id', $resourceId)->first();

        if ($dbRow) {
            return view(
                'resources.create',
                [
                    'existingCats' => $existingCats,
                    'resourceRow' => $dbRow,
                ]
            );
        }

        return redirect()->route('dashboard')->with('status', 'Learning resource not found.');
    }

    /**
     * Delete a resource from the system
     *
     * @param integer $resourceId
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Exception if not numeric $resourceId
     */
    public function deleteResource($resourceId)
    {
        if (is_numeric($resourceId)) {
            $resourceRow = Resources::where('id', $resourceId)->first();

            if ($resourceRow) {
                $resourceRow->delete();

                return redirect(RouteServiceProvider::ADMINHOME)->with('status', 'Successfully deleted the learning resource.');
            } else {
                return redirect(RouteServiceProvider::ADMINHOME)->with('errors', 'Error deleting the learning resource from the system.');
            }
        }

        throw new \Exception('Non numeric card id provided.');
    }

    /**
     * List all the learning resources associated with a category
     *
     * @param int $catId
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * @throws \Exception If non-numeric $catId encountered
     */
    public function resourceCategory($catId)
    {
        if (is_numeric($catId)) {
            $resourceRows = Resources::where('category', $catId)->paginate(Config::get('flash_cards.results_per_page'));

            if ($resourceRows) {
                return view(
                    'resources.resource-category',
                    [
                        'resourceRows' => $resourceRows
                    ]
                );
            }

            return redirect(RouteServiceProvider::ADMINHOME)->with('errors', 'Category not found.');
        }

        throw new \Exception('Non numeric category id provided.');
    }
}
