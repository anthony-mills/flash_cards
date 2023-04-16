<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    /**
    * Return a JSON array of all stored card tags
    *
    * @return JsonResponse
     **/
    public function getTags() : JsonResponse
    {
        return response()->json(Tags::all()->pluck('tag'), 200);
    }
}
