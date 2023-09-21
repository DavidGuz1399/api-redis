<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_api_request()
    {
        $response = $this->postJson('/api/auth/login', ['username' => 'tester','password' => 'PASSWORD']);

        $response
            ->assertStatus(200)
            ->assertJson([]);
    }
}
