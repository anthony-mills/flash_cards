<?php
/**
* Eloquent model for storage of flash card feedback
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable = [
                            'card_id',
                            'feedback',
                            'user_agent',
                            'ip'
                          ];
}
