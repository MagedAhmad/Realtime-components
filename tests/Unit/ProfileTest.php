<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Component;

class ProfileTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_u_can_get_user_components()
    {
        $this->withoutExceptionHandling();
        $this->signIn();
        $component = factory(Component::class)->create(['user_id'=> auth()->id()]);
        
        $this->assertEquals($component->name, auth()->user()->components()->first()->name);
    }
}
