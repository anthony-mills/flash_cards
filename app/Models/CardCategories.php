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
    * Return all prize pools and their enclosed prizes
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
}