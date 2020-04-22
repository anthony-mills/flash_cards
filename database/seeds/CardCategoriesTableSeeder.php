<?php

use Illuminate\Database\Seeder;

class CardCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('card_categories')->delete();
        
        \DB::table('card_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'AWS Basics',
                'created_at' => '2020-04-19 23:10:08',
                'updated_at' => '2020-04-19 23:10:08',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'AWS EC2',
                'created_at' => '2020-04-21 06:14:55',
                'updated_at' => '2020-04-21 06:14:55',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'AWS S3',
                'created_at' => '2020-04-21 06:17:17',
                'updated_at' => '2020-04-21 06:17:17',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'AWS WAF',
                'created_at' => '2020-04-21 08:31:10',
                'updated_at' => '2020-04-21 08:31:10',
            ),
        ));
        
        
    }
}