<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testAppAccessible()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }
}
