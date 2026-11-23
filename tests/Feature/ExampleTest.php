<?php

namespace Tests\Feature;

use App\Models\Dojo;
use App\Models\Ninja;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the landing page returns 200 and renders the responsive layout and footer.
     */
    public function test_landing_page_renders_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Ninja', false);
        $response->assertSee('Academy', false);
        $response->assertSee('Shadow Dispatch', false);
        $response->assertSee('Honoring the Shinobi Way', false);
    }

    /**
     * Test ninjas index page renders successfully with all ninjas and their dojos.
     */
    public function test_ninjas_index_page_renders_successfully(): void
    {
        $dojo = Dojo::create([
            'name' => 'Shadow Temple',
            'location' => 'Mount Fuji',
            'description' => 'Ancient sanctuary of shadows.',
        ]);

        $ninja = Ninja::create([
            'name' => 'Ryu',
            'skill' => 'Fireball',
            'rank' => 'Jonin',
            'bio' => 'Master of flame ninjutsu.',
            'dojo_id' => $dojo->id,
        ]);

        $response = $this->get('/ninjas');

        $response->assertStatus(200);
        $response->assertSee('Currently Available Ninjas');
        $response->assertSee('View Details');
        $response->assertSee('Ryu');
        $response->assertSee('Fireball');
        $response->assertSee('Shadow Temple');
    }

    /**
     * Test create ninja page renders successfully with dojo selection.
     */
    public function test_create_ninja_page_renders_successfully(): void
    {
        $dojo = Dojo::create([
            'name' => 'Cobra-Kai Dojo',
            'location' => 'Kyoto',
            'description' => 'Strike first.',
        ]);

        $response = $this->get('/ninjas/create');

        $response->assertStatus(200);
        $response->assertSee('Create Ninja');
        $response->assertSee('Cobra-Kai Dojo');
    }

    /**
     * Test storing a ninja assigns the foreign key dojo_id.
     */
    public function test_store_ninja_with_dojo_relationship(): void
    {
        $dojo = Dojo::create([
            'name' => 'Miyagi-Do',
            'location' => 'Okinawa',
            'description' => 'Peace and balance.',
        ]);

        $response = $this->post('/ninjas', [
            'name' => 'Daniel',
            'skill' => 'Crane Kick',
            'rank' => 'Chunin',
            'bio' => 'Champion of the All-Valley tournament.',
            'dojo_id' => $dojo->id,
        ]);

        $this->assertDatabaseHas('ninjas', [
            'name' => 'Daniel',
            'dojo_id' => $dojo->id,
        ]);

        $ninja = Ninja::where('name', 'Daniel')->first();
        $this->assertEquals($dojo->id, $ninja->dojo->id);
        $response->assertRedirect('/ninjas/'.$ninja->id);
    }

    /**
     * Test show ninja profile page renders successfully with dojo details.
     */
    public function test_show_ninja_page_renders_successfully(): void
    {
        $dojo = Dojo::create([
            'name' => 'Lotus Sanctuary',
            'location' => 'Kyoto',
            'description' => 'Herbal medicine and tranquility.',
        ]);

        $ninja = Ninja::create([
            'name' => 'Ayame',
            'skill' => 'Stealth',
            'rank' => 'Chunin',
            'bio' => 'Shadow infiltrator.',
            'dojo_id' => $dojo->id,
        ]);

        $response = $this->get('/ninjas/'.$ninja->id);

        $response->assertStatus(200);
        $response->assertSee('Ayame');
        $response->assertSee('Stealth');
        $response->assertSee('Lotus Sanctuary');
        $response->assertSee('Kyoto');
    }
}
