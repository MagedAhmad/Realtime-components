<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Component;

class ComponentTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_true() {
        $this->assertTrue(TRUE);
    }

    public function test_return_valid_component_path() {
        $component = factory(Component::class)->create();

        $this->assertEquals('/component/' . $component->slug, $component->path());
    }
}
