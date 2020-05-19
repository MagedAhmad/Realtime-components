<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Component;
use App\Rating;

class RatingTest extends TestCase
{
    use RefreshDatabase; 

    public function test_user_can_rate_a_component() {
        $this->signIn();
        $component = factory(Component::class)->create();

        $response = $this->post('/component/rate', [
            'points' => 4.0,
            'component_id' => $component->id
        ]);

        $this->assertDatabaseHas('ratings', ['points' => 4.0]);
    }

    public function test_component_have_average_rating() {
        $component = factory(Component::class)->create();
        factory(Rating::class)->create(['component_id' => $component->id, 'points' => 4.0]);
        factory(Rating::class)->create(['component_id' => $component->id, 'points' => 3.0]);
        factory(Rating::class)->create(['component_id' => $component->id]);

        $this->assertEquals(3.7, $component->ratingAverage());
    }

    public function test_guests_cannot_rate() {
        $component = factory(Component::class)->create();

        $response = $this->post('/component/rate', [
            'points' => 4.0,
            'component_id' => $component->id
        ])->assertRedirect('/login'); 
    }

    public function test_user_can_get_his_rating_to_a_given_component() {
        $this->signIn();
        $component = factory(Component::class)->create();

        factory(Rating::class)->create([
            'component_id' => $component->id,
            'user_id' => auth()->id(),
            'points' => 3.5
        ]);

        $this->assertEquals(3.5, $component->UserRating());
    }
}
