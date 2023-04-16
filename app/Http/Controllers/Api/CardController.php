<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\Feedback;
use App\Models\SavedCards;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

class CardController extends Controller
{
    /**
     * Store a card for future review by a user
     *
     * @param Request $reqObj
     *
     * @return JsonResponse
     */
    public function addReviewCard(Request $reqObj) : JsonResponse
    {
        $cardRow = Cards::where('id', $reqObj->get("card_id"))->first();

        if ($cardRow) {
            SavedCards::updateOrCreate(["card_id" => $cardRow->id, "user_id" => Auth::id()]);
            return response()->json(["data" => "Card successfully saved", "errors" => NULL]);
        }

        return response()->json(["errors" => "Card not found."]);
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
