<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        // $this->call(CardsCategoriesTableSeeder::class);
        $this->call(CardCategoriesTableSeeder::class);
        $this->call(CardsTableSeeder::class);
        $this->call(DefineUserRolesSeeder::class);
    }
}
