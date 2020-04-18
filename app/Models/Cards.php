<?php
/**
* Eloquent model for storage of flash card content
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    protected $table = 'cards';

    protected $fillable = [
                            'category',
                            'problem',
                            'solution'
                          ];
                          

}