<?php
/**
* Eloquent model for storage of links to learning resources
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Resources extends Model
{
    protected $table = 'resources';

    protected $fillable = [
                            'category',
                            'link',
                          ];
}
