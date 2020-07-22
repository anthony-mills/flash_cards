<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Config;

use Tests\TestCase;

class NoAuthRouteTest extends TestCase
{
    /**
     * Test the root of the application
     *
     * @return void
     */
    public function testRootRoute()
    {
        $response = $this->get( Config::get('app.url') . '/');

        print_r( $response->getContent() );
        $response->assertStatus(200);
    }

    /**
     * Test the login path of the application
     *
     * @return void
     */
    public function testLoginRoute()
    {
        $response = $this->get( Config::get('app.url') . '/login');

        $response->assertStatus(200);
    }    

    /**
     * Test the change password path of the application / will redirect as no auth 
     *
     * @return void
     */
    public function testChangePasswordRoute()
    {
        $response = $this->get( Config::get('app.url') . '/auth/change-password');

        $response->assertStatus(302);
    }    

    /**
     * Test the backend card management routes / will redirect as no auth 
     *
     * @return void
     */
    public function testCardRoutes()
    {
        $appUrl = Config::get('app.url');

        $testPaths = array(
            '/card/create',
            '/card/edit/1',
            '/card/delete/1',
            '/card/categories/list',
            '/card/categories/delete/1',
            '/card/categories/create',
            '/card/category/1',                           
        );

        foreach ($testPaths as $testPath) {
            $response = $this->get( $appUrl . '/auth/change-password');

            $response->assertStatus(302);
        }
    }             
}