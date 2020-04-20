<?php

use Illuminate\Database\Seeder;

class CardsCategoriesTableSeeder extends Seeder
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
        ));

        \DB::table('cards')->delete();
        
        \DB::table('cards')->insert(array (
            0 => 
            array (
                'category' => 1,
                'problem' => 'The lowest cost EC2 instance type for general purpose workloads?',
                'solution' => 'The T2 family.',
                'created_at' => '2020-04-20 01:07:49',
                'updated_at' => '2020-04-20 01:07:49',
            ),
            1 => 
            array (
                'category' => 1,
                'problem' => 'Maximum size of an AWS S3 object?',
                'solution' => '5TB is the maximum size for an S3 object.',
                'created_at' => '2020-04-20 01:13:13',
                'updated_at' => '2020-04-20 01:13:13',
            ),
            2 => 
            array (
                'category' => 1,
                'problem' => 'What does S3 stand for?',
                'solution' => 'Simple Storage Service',
                'created_at' => '2020-04-20 01:18:35',
                'updated_at' => '2020-04-20 01:18:35',
            ),
            3 => 
            array (
                'category' => 1,
                'problem' => 'What are the 5 pillars of the AWS well architected framework?',
                'solution' => '1. Operational Excellence
2. Security
3. Reliability
4. Performance Efficiency
5. Cost Optimization',
                'created_at' => '2020-04-20 01:21:23',
                'updated_at' => '2020-04-20 01:21:23',
            ),
            4 => 
            array (
                'category' => 1,
                'problem' => 'What is the smallest possible file size for an Amazon S3 object?',
                'solution' => 'The smallest possible object size with S3 is 0 bytes.',
                'created_at' => '2020-04-20 01:55:39',
                'updated_at' => '2020-04-20 01:55:39',
            ),
        ));
        
        
    }
}