<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Component;

class UpdateComponentTest extends TestCase
{
    use RefreshDatabase;

    public function test_unauthorized_users_cannot_update_component() {
        $this->withExceptionHandling();
        $this->signIn();

        $component = factory(Component::class)->create(['user_id' => factory('App\User')->create()->id]);
        
        $response = $this->patch($component->path(),[])
            ->assertStatus(403);
    }

    public function test_component_name_and_body_are_needed() {
        $this->signIn();
        $component = factory(Component::class)->create(['user_id' => auth()->id()]);

        $response = $this->patch($component->path(),[
            'name' => 'a title'
        ])->assertSessionHasErrors('body');
        
        $response = $this->patch($component->path(),[
            'body' => 'a body'
        ])->assertSessionHasErrors('name');
    }

    public function test_component_can_be_updated() {
        $this->signIn();
        $component = factory(Component::class)->create(['user_id' => auth()->id()]);
        $response = $this->patch($component->path(),[
            'name' => 'something',
            'body' => 'a body'
        ]);
        
        $this->assertEquals('something', $component->fresh()->name);
    }
}
