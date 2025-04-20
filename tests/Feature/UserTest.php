<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_creation(): void
    {
        $data = [
            'name'=> 'Pedro Pérez',
            'email' => 'correo@correo.com',
            'password' => '12345678'
        ];

        $response = $this->post('/api/register', $data);
        $response->assertStatus(201);
        $response->assertJsonStructure(
            [
                'message',
                'user'=>[
                    "name",
                    "email",
                    "updated_at",
                    "created_at",
                    "id"
                ]
            ]
        );
        $this->assertDatabaseHas( 'users', [
            'name' => 'Pedro Pérez',
            'email' => 'correo@correo.com'
        ]);
    }
}
