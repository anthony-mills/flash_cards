<?php
/**
* Eloquent model for storage of flash card content
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class SavedCards extends Model
{
    protected $table = 'saved_cards';

    protected $fillable = [
                            'user_id',
                            'card_id',
                          ];
}
