<?php

namespace tests\Browser\Tests\AdminPanel;

use App\Models\User;
use Illuminate\Support\Facades\Config;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\AuthSession;
use Tests\DuskTestCase;

class CreateLearningResourceTest extends DuskTestCase
{
    // URL for learning resource creation
    protected $dashURL = '/resource/create';

    // User account to run tests under
    protected $testUser = 1;


    public function testCreation()
    {
        echo "\r\nBrowser Tests: Running learning resource creation tests. \r\n";

        $this->createResourceView();
    }

    /**
    * Test the elements in the create resource view
    *
    * @return void
    **/
    protected function createResourceView()
    {
        $this->browse(function (Browser $browserObj) {
            $userRow = User::find(1);

            $browserObj->loginAs($userRow)
                    ->visit(Config::get('app.url') . $this->dashURL)
                    ->assertSee('Create Learning Resource')
                    ->assertSee($userRow->name)
                    ->assertSee('Category')
                    ->assertSee('Name')
                    ->assertSee('Resource Link')
                    ->assertSee('Description')
                    ->assertSee('Dashboard')
                    ->click('@drop_down_menu')
                    ->assertSee('Home')
                    ->assertSee('Dashboard')
                    ->assertSee('Admin Dashboard')
                    ->assertSee('Dashboard')
                    ->assertSee('Change Password')
                    ->assertSee('Logout');
        });
    }
}
