<?php

namespace tests\Browser\Tests\Cards;

use Illuminate\Support\Facades\Config;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\AuthSession;
use Tests\DuskTestCase;

class SetSelectionTest extends DuskTestCase
{
    public function testSetSelection()
    {
        echo "\r\nBrowser Tests: Running card set selection tests. \r\n";

        $this->createCategoryFail();
    }

    /**
    * Select flash card set
    *
    * @return void
    **/
    protected function createCategoryFail()
    {
        $this->browse(function (Browser $browserObj) {
            $browserObj->visit(Config::get('app.url'))
                    ->assertSee('Quiz Options')
                    ->assertVisible('@card_category')
                    ->assertSelected('@card_category', '')
                    ->assertVisible('@card_difficulty')
                    ->assertSelected('@card_difficulty', 0)
                    ->assertVisible('@card_number')
                    ->assertSelected('@card_number', 10)
                    ->assertVisible('@continue_button')
                    ->click('@continue_button')
                    ->waitFor('.flash-card');
        });
    }
}
