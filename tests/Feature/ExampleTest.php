<?php

namespace Tests\Feature;

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
     * Test ninjas index page renders successfully with all ninjas.
     */
    public function test_ninjas_index_page_renders_successfully(): void
    {
        $ninja = Ninja::create([
            'name' => 'Ryu',
            'skill' => 'Fireball',
            'rank' => 'Jonin',
            'bio' => 'Master of flame ninjutsu.',
        ]);

        $response = $this->get('/ninjas');

        $response->assertStatus(200);
        $response->assertSee('Currently Available Ninjas');
        $response->assertSee('View Details');
        $response->assertSee('Ryu');
        $response->assertSee('Fireball');
    }

    /**
     * Test create ninja page renders successfully.
     */
    public function test_create_ninja_page_renders_successfully(): void
    {
        $response = $this->get('/ninjas/create');

        $response->assertStatus(200);
        $response->assertSee('Create Ninja');
    }

    /**
     * Test show ninja profile page renders successfully.
     */
    public function test_show_ninja_page_renders_successfully(): void
    {
        $ninja = Ninja::create([
            'name' => 'Ayame',
            'skill' => 'Stealth',
            'rank' => 'Chunin',
            'bio' => 'Shadow infiltrator.',
        ]);

        $response = $this->get('/ninjas/'.$ninja->id);

        $response->assertStatus(200);
        $response->assertSee('Ayame');
        $response->assertSee('Stealth');
        $response->assertSee('Shinobi Background');
    }
}
