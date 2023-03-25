<?php

namespace Tests\Browser\Tests\Cards;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Support\Facades\Config;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\AuthSession;
use Tests\DuskTestCase;

class CreateQuizCardTest extends DuskTestCase
{
    // URL for creating a quiz card
    protected $createURL = '/quiz-card/create';

    /**
     * Browser test for elements on the create Quiz card page.
     *
     * @return void
     */
    public function testCreateQuizCardPage() : void
    {
        echo "\r\nBrowser Tests: Testing elements on the create Quiz Card page. \r\n";

        $this->createQuizCardPage();

    }

    /**
    * Test the quiz card creation page
    *
    * @return void
    **/
    protected function createQuizCardPage() : void
    {
        $this->browse(function (Browser $browserObj) {
            $userRow = User::find(1);

            $browserObj->loginAs($userRow)
                ->visit($this->createURL)
                ->assertSee('Category')
                ->assertVisible('@card_category')
                ->assertSee('Difficulty')
                ->assertVisible('@difficulty')
                ->assertSee('Answers')
                ->assertVisible('@quiz_solution1')
                ->assertVisible('@quiz_card_answer1')
                ->assertVisible('@quiz_solution2')
                ->assertVisible('@quiz_card_answer2')
                ->assertVisible('@quiz_solution3')
                ->assertVisible('@quiz_card_answer3')
                ->assertVisible('@quiz_solution4')
                ->assertVisible('@quiz_card_answer4')
                ->assertSee('Tags')
                ->assertVisible('@save_card');
        });

    }

}
