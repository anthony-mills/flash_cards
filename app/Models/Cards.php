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
                            'difficulty',
                            'solution'
                          ];


    /**
    * Get cards by category & type
    *
    * @param int $catId
    * @param int $cardType
    *
    * @return
    **/
    public function getByCat( int $catId, int $cardType=0)
    {
        $pageResults = Config::get('flash_cards.results_per_page');

        if ($cardType > 0) {
            return $this->where('category', $catId)
                ->where('type', $cardType)
                ->orderBy('id', 'DESC')
                ->paginate($pageResults);
        }

        return $this->where('category', $catId)
            ->orderBy('id', 'DESC')
            ->paginate($pageResults);
    }
}
