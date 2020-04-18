<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        return view(
            'cards.landing', 
            [
                'section_name' => 'Prizes'
            ]
        );    	
    }
}
