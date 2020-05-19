<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase; 
use App\User;
use App\Component;

class UserTest extends TestCase
{
    use RefreshDatabase; 

    public function test_user_has_components() {
        $this->signIn();
        $user = auth()->user();
        factory(Component::class)->create(['user_id' => $user->id]);
        $this->assertCount(1, $user->components->toArray());
    }
}
