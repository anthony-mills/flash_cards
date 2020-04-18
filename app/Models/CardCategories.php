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
                          

}