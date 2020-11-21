<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Component;

class CreateComponentsTest extends TestCase
{
    use RefreshDatabase; 

    public function test_component_requires_name()
    {
        $this->signIn();
        $response = $this->post('/component', [
            'body' => 'something'
        ]);

        $response->assertSessionHasErrors('name');
    }

    public function test_component_requires_body()
    {
        $this->signIn();
        $response = $this->post('/component', [
            'name' => 'something'
        ]);

        $response->assertSessionHasErrors('body');
    }

    public function test_guests_cannot_create_components() 
    {
        $this->post('/component')
            ->assertRedirect('/register');

        $this->get('/component/create')
            ->assertRedirect('/register');
    }
}
