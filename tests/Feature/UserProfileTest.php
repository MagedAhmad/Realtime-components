<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Component;

class UserProfileTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_visit_a_profile() 
    {
        $this->withoutExceptionHandling();
        
        $user = factory('App\User')->create();
        $this->get('/profile/'. $user->id)
            ->assertSee($user->name);
    }

    public function test_user_can_see_his_components() 
    {
        $this->signIn();
        $component = factory(Component::class)->create(['user_id' => auth()->id()]);
        $this->get('/profile/'. auth()->id())
            ->assertSee($component->name);
    }
}
