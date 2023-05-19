<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function testAuthenticatedUserCanLogout()
    {
        $user = \App\Models\User::factory()->create();

        $response = $this->actingAs($user)->post(route('logout'));

        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }

    public function testGuestCannotLogout()
    {
        $response = $this->post(route('logout'));

        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }
}
