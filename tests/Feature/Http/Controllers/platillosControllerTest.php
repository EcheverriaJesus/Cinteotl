<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\platillosController
 */
class platillosControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $platillos = platillos::factory()->count(3)->create();

        $response = $this->get(route('platillo.index'));

        $response->assertOk();
        $response->assertViewIs('platillo.index');
        $response->assertViewHas('platillos');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('platillo.create'));

        $response->assertOk();
        $response->assertViewIs('platillo.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\platillosController::class,
            'store',
            \App\Http\Requests\platillosStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $response = $this->post(route('platillo.store'));

        $response->assertRedirect(route('platillo.index'));
        $response->assertSessionHas('platillo.id', $platillo->id);

        $this->assertDatabaseHas(platillos, [ /* ... */ ]);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $platillo = platillos::factory()->create();

        $response = $this->get(route('platillo.show', $platillo));

        $response->assertOk();
        $response->assertViewIs('platillo.show');
        $response->assertViewHas('platillo');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $platillo = platillos::factory()->create();

        $response = $this->get(route('platillo.edit', $platillo));

        $response->assertOk();
        $response->assertViewIs('platillo.edit');
        $response->assertViewHas('platillo');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\platillosController::class,
            'update',
            \App\Http\Requests\platillosUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $platillo = platillos::factory()->create();

        $response = $this->put(route('platillo.update', $platillo));

        $platillo->refresh();

        $response->assertRedirect(route('platillo.index'));
        $response->assertSessionHas('platillo.id', $platillo->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $platillo = platillos::factory()->create();
        $platillo = Platillo::factory()->create();

        $response = $this->delete(route('platillo.destroy', $platillo));

        $response->assertRedirect(route('platillo.index'));

        $this->assertDeleted($platillo);
    }
}
