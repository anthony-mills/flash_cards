<?php
/**
* Eloquent model for storage of flash card categories
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
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
    * @return Collection $existingCats
    **/
    public function getCategories()
    {
        $pageResults = Config::get('flash_cards.results_per_page');

        $existingCats = $this->orderBy('name', 'ASC')->paginate( $pageResults );

        return $existingCats;
    }

    /**
    * Return a category along with its associated Cards
    * 
    * @param integer $catId
    *
    * @return null|object $existingCats
    **/
    public function getCategory( $catId )
    {
        $existingCats = $this->with(
            'flashCards'
        )->where('id', $catId)
        ->orderBy('name', 'ASC')->first();

        return $existingCats;
    }            
}