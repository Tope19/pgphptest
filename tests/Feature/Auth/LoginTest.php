<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_view_form(){
        $response = $this->get('/login');
        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    // public function test_user_can_login()
    // {
    //     $user = factory(\App\Models\User::class)->create([
    //         'password' => bcrypt($password = 'password')
    //     ]);

    //     $response = $this->post('/login', [
    //         'email' => $user->email,
    //         'password' => $password,
    //     ]);

    //     $response->assertRedirect('/home');
    //     $this->assertAuthenticatedAs($user);
    // }
}

