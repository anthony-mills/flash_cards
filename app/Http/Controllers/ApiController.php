<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tags;

class ApiController extends Controller
{
    /**
    * Return a JSON array of all stored card tags
    *
    * @return \Illuminate\Http\Response
    **/
    public function getTags()
    {
        return response()->json(Tags::all(['id', 'tag']), 200);
    }
}
