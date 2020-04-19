<?php
/**
* Eloquent model for storage of falsh card categories
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardCategories extends Model
{
    protected $table = 'card_categories';

    protected $fillable = [
                            'name',
                          ];
                          

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
    * @return Illuminate\Support\Collection $existingCats
    **/
    public function getCategories()
    {
        $existingCats = $this->with(
            'flashCards'
        )->orderBy('name', 'ASC')->get();

        return $existingCats;
    }

    /**
    * Return a category along with its associated Cards
    * 
    * @param integer $catId
    *
    * @return Illuminate\Support\Collection $existingCats
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