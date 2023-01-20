<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLogins extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'ip',
        'user_agent'
    ];

}
