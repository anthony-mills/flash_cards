<?php
/**
* Eloquent model for storage of flash card content
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SavedCards extends Model
{
    protected $table = 'saved_cards';

    protected $fillable = [
                            'user_id',
                            'card_id',
                          ];

    /**
     * Get a count of the saved cards by Card Type.
     *
     * @param int $userId
     *
     * @return mixed
     */
    public function cardsByType(int $userId): mixed
    {
        return SavedCards::join('cards', 'saved_cards.card_id', '=', 'cards.id')
            ->select('cards.type', DB::raw('count(*) as count'))
            ->where('saved_cards.user_id', $userId)
            ->groupBy('cards.type')
            ->get();
    }
}
