<?php
/**
* Eloquent model for storage of flash card Tags
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class CardTags extends Model
{
    protected $table = 'card_tags';

    protected $fillable = [
                            'card_id',
                            'tag_id',
                          ];

}
