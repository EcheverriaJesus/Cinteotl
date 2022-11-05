<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Venta;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ventasController
 */
class ventasControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $ventas = ventas::factory()->count(3)->create();

        $response = $this->get(route('venta.index'));

        $response->assertOk();
        $response->assertViewIs('venta.index');
        $response->assertViewHas('ventas');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('venta.create'));

        $response->assertOk();
        $response->assertViewIs('venta.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ventasController::class,
            'store',
            \App\Http\Requests\ventasStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $response = $this->post(route('venta.store'));

        $response->assertRedirect(route('venta.index'));
        $response->assertSessionHas('venta.id', $venta->id);

        $this->assertDatabaseHas(ventas, [ /* ... */ ]);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $venta = ventas::factory()->create();

        $response = $this->get(route('venta.show', $venta));

        $response->assertOk();
        $response->assertViewIs('venta.show');
        $response->assertViewHas('venta');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $venta = ventas::factory()->create();

        $response = $this->get(route('venta.edit', $venta));

        $response->assertOk();
        $response->assertViewIs('venta.edit');
        $response->assertViewHas('venta');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ventasController::class,
            'update',
            \App\Http\Requests\ventasUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $venta = ventas::factory()->create();

        $response = $this->put(route('venta.update', $venta));

        $venta->refresh();

        $response->assertRedirect(route('venta.index'));
        $response->assertSessionHas('venta.id', $venta->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $venta = ventas::factory()->create();
        $venta = Venta::factory()->create();

        $response = $this->delete(route('venta.destroy', $venta));

        $response->assertRedirect(route('venta.index'));

        $this->assertDeleted($venta);
    }
}
