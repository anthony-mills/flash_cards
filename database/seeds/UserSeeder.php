<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds for the users table
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'test.user@test.com',
            'email_verified_at' => '2020-01-01 00:00:00',
            'password' => '$2y$10$coq8FcG/V6wkjHQUmq0bNuTz8PMykS2qbuyWZyL7vm00PusSOE1Xu'
        ]);
    }
}
