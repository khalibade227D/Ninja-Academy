<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test the landing page returns 200 and renders the responsive layout and footer.
     */
    public function test_landing_page_renders_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Ninja Academy', false);
        $response->assertSee('Shadow Dispatch', false);
        $response->assertSee('Honoring the Shinobi Way', false);
    }

    /**
     * Test ninjas index page renders successfully.
     */
    public function test_ninjas_index_page_renders_successfully(): void
    {
        $response = $this->get('/ninjas');

        $response->assertStatus(200);
        $response->assertSee('Currently Available Ninjas');
        $response->assertSee('Ryu');
        $response->assertSee('Ayame');
        $response->assertSee('Shadow Dispatch');
    }

    /**
     * Test create ninja page renders successfully.
     */
    public function test_create_ninja_page_renders_successfully(): void
    {
        $response = $this->get('/ninjas/create');

        $response->assertStatus(200);
        $response->assertSee('Recruit New Shinobi');
    }

    /**
     * Test show ninja page renders successfully.
     */
    public function test_show_ninja_page_renders_successfully(): void
    {
        $response = $this->get('/ninjas/1');

        $response->assertStatus(200);
        $response->assertSee('Ryu');
        $response->assertSee('Fireball');
    }
}
