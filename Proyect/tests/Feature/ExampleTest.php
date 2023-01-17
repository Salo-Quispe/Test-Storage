<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user()
    {
        $response = $this->get('/usuarios');
        $response->assertStatus(200);
        $response->assertSee('Usuarios');

    }

    /** @return void */
    
    public function test_usernuevo()
    {
        $response = $this->get('/usuarios/nuevo');
        $response->assertStatus(200);
        $response->assertSee('Crear nuevo usuario');

    }

    public function test_form()
    {
        $response = $this->get('/form');
        $response->assertStatus(200);

    }
}
