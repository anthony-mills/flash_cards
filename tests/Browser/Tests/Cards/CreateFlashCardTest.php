<?php

namespace Tests\Browser\Tests\Cards;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Support\Facades\Config;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\AuthSession;
use Tests\DuskTestCase;

class CreateFlashCardTest extends DuskTestCase
{
    // URL for listing recieved card feedback / comments
    protected $createURL = '/flash-card/create';

    /**
     * Browser test for elements on the create Flash card page.
     *
     * @return void
     */
    public function testCreateFlashCardPage() : void
    {
        echo "\r\nBrowser Tests: Testing elements on the create Flash Card pag. \r\n";

        $this->createFlashCardPage();

    }

    /**
    * Test the flash card creation page
    *
    * @return void
    **/
    protected function createFlashCardPage() : void
    {
        $this->browse(function (Browser $browserObj) {
            $userRow = User::find(1);

            $browserObj->loginAs($userRow)
                ->visit($this->createURL)
                ->assertSee('Category')
                ->assertVisible('@card_category')
                ->assertSee('Difficulty')
                ->assertVisible('@difficulty')
                ->assertSee('Problem')
                ->assertSee('Solution')
                ->assertSee('Tags')
                ->assertVisible('@save_card');
        });

    }

}
