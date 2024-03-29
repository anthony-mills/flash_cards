<?php

namespace tests\Browser\Tests\AdminPanel;

use App\Models\Cards;
use App\Models\User;
use Illuminate\Support\Facades\Config;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\AuthSession;
use Tests\DuskTestCase;

class AdminDashboardTest extends DuskTestCase
{
    // URL for card creation
    protected $dashURL = '/learning_resources/dashboard';

    // User account to run tests under
    protected $testUser = 1;


    public function testCreation()
    {
        echo "\r\nBrowser Tests: Running admin dashboard tests. \r\n";

        $this->createCategoryFail();
    }

    /**
    * Test the creation of a new category with an invalid category name
    *
    * @return void
    **/
    protected function createCategoryFail()
    {
        $this->browse(function (Browser $browserObj) {
            $userRow = User::find(1);

            $cardCount = Cards::count();

            $browserObj->loginAs($userRow)
                    ->visit(Config::get('app.url') . $this->dashURL)
                    ->assertSee($userRow->name)
                    ->assertSee('Flash Cards Management')
                    ->assertSee('Content Categories')
                    ->assertSee('Create Category')
                    ->assertSee('Cards')
                    ->assertSee('Create Flash Card')
                    ->assertSee('Create Quiz Card')
                    ->assertSee('Create Learning Resource')
                    ->assertSee('Existing Categories')
                    ->assertSee('View Flash Card Feedback')
                    ->assertSee('Cards')
                    ->assertSee('Misc')
                    ->assertSee('Start a Card Set')
                    ->assertSee('Currently ' . $cardCount . ' saved flash cards')
                    ->click('@drop_down_menu')
                    ->assertSee('Home')
                    ->assertSee('Admin Panel')
                    ->assertSee('Change Password')
                    ->assertSee('Logout')
                    ->click('@drop_down_menu')
                    ->assertDontSee('Home')
                    ->assertDontSee('Admin Dashboard')
                    ->assertDontSee('Change Password')
                    ->assertDontSee('Logout');
        });
    }
}
