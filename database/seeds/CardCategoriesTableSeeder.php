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
                'created_at' => '2020-04-19 11:10:08',
                'id' => 1,
                'name' => 'AWS Basics',
                'updated_at' => '2020-04-19 11:10:08',
            ),
            1 => 
            array (
                'created_at' => '2020-04-21 06:14:55',
                'id' => 2,
                'name' => 'AWS EC2',
                'updated_at' => '2020-04-21 06:14:55',
            ),
            2 => 
            array (
                'created_at' => '2020-04-21 06:17:17',
                'id' => 3,
                'name' => 'AWS S3',
                'updated_at' => '2020-04-21 06:17:17',
            ),
            3 => 
            array (
                'created_at' => '2020-04-21 08:31:10',
                'id' => 4,
                'name' => 'AWS WAF',
                'updated_at' => '2020-04-21 08:31:10',
            ),
            4 => 
            array (
                'created_at' => '2020-04-23 05:32:21',
                'id' => 5,
                'name' => 'AWS Databases',
                'updated_at' => '2020-04-23 05:32:21',
            ),
            5 => 
            array (
                'created_at' => '2020-04-24 06:44:50',
                'id' => 6,
                'name' => 'AWS Elasticache',
                'updated_at' => '2020-04-24 06:44:50',
            ),
            6 => 
            array (
                'created_at' => '2020-04-24 07:02:54',
                'id' => 7,
                'name' => 'AWS DNS',
                'updated_at' => '2020-04-24 07:02:54',
            ),
            7 => 
            array (
                'created_at' => '2020-04-25 08:23:22',
                'id' => 9,
                'name' => 'AWS Networking',
                'updated_at' => '2020-04-25 08:23:22',
            ),
            8 => 
            array (
                'created_at' => '2020-05-09 22:15:58',
                'id' => 10,
                'name' => 'AWS Security',
                'updated_at' => '2020-05-09 22:15:58',
            ),
            9 => 
            array (
                'created_at' => '2020-06-19 23:09:22',
                'id' => 11,
                'name' => 'AWS CloudFormation',
                'updated_at' => '2020-06-19 23:09:22',
            ),
        ));
        
        
    }
}