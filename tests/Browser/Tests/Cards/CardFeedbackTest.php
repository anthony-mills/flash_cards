<?php

namespace tests\Browser\Tests\Cards;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Config;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Tests\Browser\Pages\AuthSession;

use App\Models\Feedback;

use App\User;

class CardFeedbackTest extends DuskTestCase
{
    // URL for listing recieved card feedback / comments
    protected $dashURL = '/card/feedback/view';

    protected $feedbackComment = 'Dusk created test card comment.';

    /**
     * Browser test related to card feedback
     * 
     * @return void
     */
    public function testCardFeedbackListing() : void
    {
        echo "\r\nBrowser Tests: Running card feedback tests. \r\n";

        $feedbackId = $this->createCardFeedback();

        $this->listStoredFeedback();

        Feedback::where('id', $feedbackId)->delete();
    }

    /**
    * Select flash card set
    *
    * @return int $commentId
    **/
    protected function createCardFeedback() : int
    {
        $this->browse(function (Browser $browserObj) {
            $browserObj->visit(Config::get('app.url'))
                    ->assertSelected('@card_category', '')
                    ->assertSelected('@card_difficulty', 0)
                    ->assertSelected('@card_number', 10)
                    ->assertVisible('@continue_button')
                    ->click('@continue_button')
                    ->waitFor('.flash-card')
                    ->click('@open-feedback-modal')
                    ->waitFor('.modal-content')
                    ->assertVisible('@card-feedback-field')
                    ->assertSee('Send')
                    ->type('feedback', $this->feedbackComment)
                    ->click('@save-feedback')
                    ->pause(1000)
                    ->assertDontSee('Send');
        });

        $commentId = Feedback::pluck('id')->last();

        return $commentId;
    }

    /**
    * List the stored card feedback
    * 
    * @return void
    */
    protected function listStoredFeedback() : void 
    {
        $this->browse(function (Browser $browserObj) {
            $userRow = User::find(1);
                 
            $browserObj->loginAs($userRow)            
                    ->visit(Config::get('app.url') . $this->dashURL)
                    ->assertSee('User ID')
                    ->assertSee('Card Comment')
                    ->assertSee('User Agent')
                    ->assertSee('IP')
                    ->assertSee($this->feedbackComment)
                    ->assertSee('127.0.0.1')                                                                                
                    ->assertSee('View Card')
                    ->assertSee('Delete Comment');
        });        
    }
}
