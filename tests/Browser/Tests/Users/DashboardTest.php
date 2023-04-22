<?php

namespace tests\Browser\Tests\AdminPanel;

use App\Models\Cards;
use App\Models\User;
use Illuminate\Support\Facades\Config;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\AuthSession;
use Tests\DuskTestCase;

class DashboardTest extends DuskTestCase
{
    // URL for card creation
    protected $dashURL = '/dashboard';

    // User account to run tests under
    protected $testUser = 1;

    public function testCreation()
    {
        echo "\r\nBrowser Tests: Running user dashboard tests. \r\n";

        $this->testDashboardOptions();
    }

    /**
     * Test the options displayed on the user dashboard
     *
     * @return void
     **/
    protected function testDashboardOptions()
    {
        $this->browse(function (Browser $browserObj) {
            $userRow = User::find(1);

            $cardCount = Cards::count();

            $browserObj->loginAs($userRow)
                ->visit(Config::get('app.url') . $this->dashURL)
                ->assertSee('My Learning Dashboard')
                ->assertSee($userRow->name)
                ->assertSee('Card Sets')
                ->assertSee('Start a Card Set')
                ->assertSee('Start Flash Card Review')
                ->assertSee('Start Quiz Card Review')
                ->assertSee('Learning Resources')
                ->assertSee('Flash Cards')
                ->assertSee('Quiz Cards')
                ->click('@drop_down_menu')
                ->assertSee('Home')
                ->assertSee('Dashboard')
                ->assertSee('Change Password')
                ->assertSee('Logout');
        });
    }
}
