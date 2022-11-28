<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Customer extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_customerList()
    {
        $response = $this->get('/customers');

        $response->assertStatus(200);//true
    }
}
