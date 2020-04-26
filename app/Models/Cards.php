<?php
/**
* Eloquent model for storage of flash card content
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Cards extends Model
{
    protected $table = 'cards';

    protected $fillable = [
                            'category',
                            'problem',
                            'solution'
                          ];


    /** 
    * Get cards by category
    *
    * @param integer $catId
    *
    * @return Illuminate\Support\Collection $existingCats    
    **/
    public function getByCat( $catId )
    {
    	$pageResults = Config::get('flash_cards.results_per_page');

		$catCards = $this->where('category', $catId)
		        		->paginate( $pageResults );

		$catCards->count = $this->where('category', $catId)->count();

		return $catCards;
    }                           
}