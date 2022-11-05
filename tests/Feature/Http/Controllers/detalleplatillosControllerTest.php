<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Detalleplatillo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\detalleplatillosController
 */
class detalleplatillosControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $detalleplatillos = detalleplatillos::factory()->count(3)->create();

        $response = $this->get(route('detalleplatillo.index'));

        $response->assertOk();
        $response->assertViewIs('detalleplatillo.index');
        $response->assertViewHas('detalleplatillos');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('detalleplatillo.create'));

        $response->assertOk();
        $response->assertViewIs('detalleplatillo.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\detalleplatillosController::class,
            'store',
            \App\Http\Requests\detalleplatillosStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $response = $this->post(route('detalleplatillo.store'));

        $response->assertRedirect(route('detalleplatillo.index'));
        $response->assertSessionHas('detalleplatillo.id', $detalleplatillo->id);

        $this->assertDatabaseHas(detalleplatillos, [ /* ... */ ]);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $detalleplatillo = detalleplatillos::factory()->create();

        $response = $this->get(route('detalleplatillo.show', $detalleplatillo));

        $response->assertOk();
        $response->assertViewIs('detalleplatillo.show');
        $response->assertViewHas('detalleplatillo');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $detalleplatillo = detalleplatillos::factory()->create();

        $response = $this->get(route('detalleplatillo.edit', $detalleplatillo));

        $response->assertOk();
        $response->assertViewIs('detalleplatillo.edit');
        $response->assertViewHas('detalleplatillo');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\detalleplatillosController::class,
            'update',
            \App\Http\Requests\detalleplatillosUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $detalleplatillo = detalleplatillos::factory()->create();

        $response = $this->put(route('detalleplatillo.update', $detalleplatillo));

        $detalleplatillo->refresh();

        $response->assertRedirect(route('detalleplatillo.index'));
        $response->assertSessionHas('detalleplatillo.id', $detalleplatillo->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $detalleplatillo = detalleplatillos::factory()->create();
        $detalleplatillo = Detalleplatillo::factory()->create();

        $response = $this->delete(route('detalleplatillo.destroy', $detalleplatillo));

        $response->assertRedirect(route('detalleplatillo.index'));

        $this->assertDeleted($detalleplatillo);
    }
}
