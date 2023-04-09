<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Config;

use App\Models\Feedback;
use Illuminate\View\View;

class CardFeedbackController extends Controller
{
    /**
     * View stored card feedback
     *
     * @return View
     **/
    public function viewFeedback()
    {
        return view(
            'cards.feedback',
            [
                'cardFeedback' => Feedback::orderBy('id', 'DESC')->paginate(Config::get('flash_cards.results_per_page'))
            ]
        );
    }

    /**
     * Delete a feedback comment from the system
     *
     * @param integer $commentId
     * @return RedirectResponse
     *
     * @throws \Exception if not numeric $cardId
     **/
    public function deleteFeedback($commentId)
    {
        if (is_numeric($commentId)) {
            $feedbackRow = Feedback::where('id', $commentId)->first();

            if ($feedbackRow) {
                $feedbackRow->delete();

                return redirect()->route('card.feedback')->with('status', 'Successfully deleted the feedback.');
            } else {
                return redirect()->route('card.feedback')->with('errors', 'Error deleting the comment from the system.');
            }
        }

        throw new \Exception('Non numeric card id provided.');
    }
}
