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
            ->assertSee($user['name']);
    }

    public function test_user_can_see_his_components() 
    {
        $this->signIn();
        $component = factory(Component::class)->create(['user_id' => auth()->id()]);
        $this->get('/profile/'. auth()->id())
            ->assertSee($component->name);
    }

    public function test_user_can_update_his_own_profile() 
    {
        $this->withoutExceptionHandling();
        $user = factory('App\User')->create(['name' => 'maged']);
        $this->signIn($user);
        $this->patch('/profile/'. $user->id , [
            'name' => 'Doe',
            'email' => 'doe@doe.com'
        ]);

        $this->assertEquals('Doe', $user->fresh()->name);
    }

    public function test_unauthorized_users_cannot_update_profile() 
    {
        $user1 = factory('App\User')->create();
        $user2 = factory('App\User')->create();
        $this->signIn($user1);

        $this->patch('/profile/'. $user2->id , [
            'name' => 'Doe',
            'email' => 'doe@doe.com'
        ])->assertStatus(403);
    }
}
