<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class RememberMeTest extends TestCase
{
    use RefreshDatabase;

    public function testRememberMeFunctionality()
    {
        $user = User::factory()->create(['password' => bcrypt('password')]);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
            'remember' => 1,
        ]);

        $this->assertTrue(Auth::check());
        $this->assertNotNull($user->remember_token);
    }
}
