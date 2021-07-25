<?php

namespace tests\Browser\Tests\Cards;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Config;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Tests\Browser\Pages\AuthSession;

use App\Models\CardCategories;

use App\User;

class CardFeedbackTest extends DuskTestCase
{
    // URL for listing recieved card feedback / comments
    protected $dashURL = '/card/feedback/view';

    public function testCardFeedbackListing()
    {
        echo "\r\nBrowser Tests: Running card feedback tests. \r\n";

        $this->createCardFeedback();
    }

    /**
    * Select flash card set
    *
    * @return void
    **/
    protected function createCardFeedback()
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
                    ->type('feedback', 'Dusk created test card comment.')
                    ->click('@save-feedback')
                    ->pause(1000)
                    ->assertDontSee('Send');
        });
    }
}
