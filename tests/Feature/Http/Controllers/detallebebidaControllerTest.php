<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Detallebebida;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\detallebebidaController
 */
class detallebebidaControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $detallebebidas = detallebebida::factory()->count(3)->create();

        $response = $this->get(route('detallebebida.index'));

        $response->assertOk();
        $response->assertViewIs('detallebebida.index');
        $response->assertViewHas('detallebebidas');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('detallebebida.create'));

        $response->assertOk();
        $response->assertViewIs('detallebebida.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\detallebebidaController::class,
            'store',
            \App\Http\Requests\detallebebidaStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $response = $this->post(route('detallebebida.store'));

        $response->assertRedirect(route('detallebebida.index'));
        $response->assertSessionHas('detallebebida.id', $detallebebida->id);

        $this->assertDatabaseHas(detallebebidas, [ /* ... */ ]);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $detallebebida = detallebebida::factory()->create();

        $response = $this->get(route('detallebebida.show', $detallebebida));

        $response->assertOk();
        $response->assertViewIs('detallebebida.show');
        $response->assertViewHas('detallebebida');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $detallebebida = detallebebida::factory()->create();

        $response = $this->get(route('detallebebida.edit', $detallebebida));

        $response->assertOk();
        $response->assertViewIs('detallebebida.edit');
        $response->assertViewHas('detallebebida');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\detallebebidaController::class,
            'update',
            \App\Http\Requests\detallebebidaUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $detallebebida = detallebebida::factory()->create();

        $response = $this->put(route('detallebebida.update', $detallebebida));

        $detallebebida->refresh();

        $response->assertRedirect(route('detallebebida.index'));
        $response->assertSessionHas('detallebebida.id', $detallebebida->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $detallebebida = detallebebida::factory()->create();
        $detallebebida = Detallebebida::factory()->create();

        $response = $this->delete(route('detallebebida.destroy', $detallebebida));

        $response->assertRedirect(route('detallebebida.index'));

        $this->assertDeleted($detallebebida);
    }
}
