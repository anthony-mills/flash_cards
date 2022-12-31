<?php

namespace tests\Browser\Tests\Categories;

use App\Models\CardCategories;
use App\Models\User;
use Illuminate\Support\Facades\Config;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\AuthSession;
use Tests\DuskTestCase;

class AdminCreateCategoryTest extends DuskTestCase
{
    // Category Name
    protected $categoryName = 'Test Category';

    // URL for card creation
    protected $cardCreateURL = '/card/categories/create';

    // User account to run tests under
    protected $testUser = 1;


    public function testCreation()
    {
        echo "\r\nBrowser Tests: Running category creation tests. \r\n";

        $this->createCategoryFail();
        $this->createCategorySuccess();

        CardCategories::where('name', $this->categoryName)->delete();
    }

    /**
    * Test the creation of a new category with an invalid category name
    *
    * @return void
    **/
    protected function createCategoryFail()
    {
        $this->browse(function (Browser $browserObj) {
            $browserObj->loginAs(User::find(1))
                    ->visit(Config::get('app.url') . $this->cardCreateURL)
                    ->assertVisible('@name')
                    ->assertVisible('@save_category')
                    ->type('name', '!INVALID_CATEGORY$$$NAME')
                    ->click('@save_category')
                    ->waitFor('.alert')
                    ->assertVisible('.alert-danger')
                    ->assertSeeIn('.alert-danger', 'The name format is invalid.');
        });
    }

    /**
    * Test the successful creation of a new category
    *
    * @return void
    **/
    protected function createCategorySuccess()
    {
        $this->browse(function (Browser $browserObj) {
            $browserObj->loginAs(User::find(1))
                    ->visit(Config::get('app.url') . $this->cardCreateURL)
                    ->assertVisible('@name')
                    ->assertVisible('@save_category')
                    ->type('name', $this->categoryName)
                    ->click('@save_category')
                    ->waitFor('.alert')
                    ->assertVisible('.alert-success')
                    ->assertSeeIn('.alert-success', 'Saved the new category "' . $this->categoryName . '".');
        });
    }
}
