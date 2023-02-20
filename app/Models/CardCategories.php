<?php
/**
* Eloquent model for storage of flash card categories
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;


class CardCategories extends Model
{
    /** @var string $table */
    protected $table = 'card_categories';

    /** @var array $fillable */
    protected $fillable = ['name'];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function flashCards()
    {
        return $this->hasMany('App\Models\Cards', 'category');
    }

    /**
    * Return all categories and their associated cards
    *
    * @param integer $paginateResults
    *
    * @return Collection $existingCats
    **/
    public function getCategories( $paginateResults = 0 )
    {
        if (Cache::has( 'categories' )) {
            $savedCats = Cache::get('categories');
        } else {
            $savedCats = CardCategories::all();

            Cache::put('categories', $savedCats);
        }

        $existingCats = $savedCats->sortBy('name');

        if ($paginateResults > 0) {
            $existingCats = $existingCats->paginate(Config::get('flash_cards.results_per_page'));
        }

        return $existingCats;
    }

    /**
    * Return a category along with its associated Cards
    *
    * @param integer $catId
    *
    * @return null|object $existingCats
    **/
    public function getCategory($catId)
    {
        $existingCats = $this->with(
            'flashCards'
        )->where('id', $catId)
        ->orderBy('name', 'ASC')->first();

        return $existingCats;
    }

    /**
     * Get category name by id
     *
     * @param integer $catId
     *
     * @return string
     */
    public static function getCategoryName(int $catId) : string
    {
        if (Cache::has( 'categories' )) {
            $savedCats  = Cache::get( 'categories' );
        } else {
            $savedCats = CardCategories::orderBy('name', 'ASC')->get();
        }

        return $savedCats->where('id', $catId)->pluck('name')->first();
    }
}
