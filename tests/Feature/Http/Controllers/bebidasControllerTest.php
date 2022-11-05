<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Bebida;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\bebidasController
 */
class bebidasControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $bebidas = bebidas::factory()->count(3)->create();

        $response = $this->get(route('bebida.index'));

        $response->assertOk();
        $response->assertViewIs('bebida.index');
        $response->assertViewHas('bebidas');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('bebida.create'));

        $response->assertOk();
        $response->assertViewIs('bebida.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\bebidasController::class,
            'store',
            \App\Http\Requests\bebidasStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $response = $this->post(route('bebida.store'));

        $response->assertRedirect(route('bebida.index'));
        $response->assertSessionHas('bebida.id', $bebida->id);

        $this->assertDatabaseHas(bebidas, [ /* ... */ ]);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $bebida = bebidas::factory()->create();

        $response = $this->get(route('bebida.show', $bebida));

        $response->assertOk();
        $response->assertViewIs('bebida.show');
        $response->assertViewHas('bebida');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $bebida = bebidas::factory()->create();

        $response = $this->get(route('bebida.edit', $bebida));

        $response->assertOk();
        $response->assertViewIs('bebida.edit');
        $response->assertViewHas('bebida');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\bebidasController::class,
            'update',
            \App\Http\Requests\bebidasUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $bebida = bebidas::factory()->create();

        $response = $this->put(route('bebida.update', $bebida));

        $bebida->refresh();

        $response->assertRedirect(route('bebida.index'));
        $response->assertSessionHas('bebida.id', $bebida->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $bebida = bebidas::factory()->create();
        $bebida = Bebida::factory()->create();

        $response = $this->delete(route('bebida.destroy', $bebida));

        $response->assertRedirect(route('bebida.index'));

        $this->assertDeleted($bebida);
    }
}
