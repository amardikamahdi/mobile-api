<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function testGuestCanAccessLoginPage()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testAuthenticatedUserCantAccessLoginPage()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/login');

        $response->assertStatus(302);
        $response->assertRedirect(route('dashboard.analytics'));
    }

    public function testGuestCannotAccessDashboard()
    {
        $response = $this->get(route('dashboard.analytics'));

        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }
}
