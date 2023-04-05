<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

use App\Models\Feedback;
use App\Models\Tags;

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

    /**
    * Store user feedback for a card, so it can be reviewed
    *
    * @param Request $reqObj
    *
    * @return JsonResponse
     **/
    public function storeFeedback(Request $reqObj) : JsonResponse
    {
        $reqData = array_merge(
            $reqObj->all(),
            [
                'user_id' => (is_numeric(Auth::id()) ? Auth::id() : null),
                'user_agent' => $reqObj->header('user-agent'),
                'ip' => $reqObj->ip()
            ]
        );

        $validator = Validator::make(
            $reqData,
            Config::get('flash_cards.card_feedback.validation_rules'),
            ['errors' => 'Missing required fields.']
        );

        if ($validator->fails()) { return response()->json($validator->errors()); }

        (new Feedback)->fill($reqData)->save();

        return response()->json(['errors' => NULL]);
    }
}
