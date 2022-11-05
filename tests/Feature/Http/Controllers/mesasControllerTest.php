<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\mesasController
 */
class mesasControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $mesas = mesas::factory()->count(3)->create();

        $response = $this->get(route('mesa.index'));

        $response->assertOk();
        $response->assertViewIs('mesa.index');
        $response->assertViewHas('mesas');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('mesa.create'));

        $response->assertOk();
        $response->assertViewIs('mesa.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\mesasController::class,
            'store',
            \App\Http\Requests\mesasStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $response = $this->post(route('mesa.store'));

        $response->assertRedirect(route('mesa.index'));
        $response->assertSessionHas('mesa.id', $mesa->id);

        $this->assertDatabaseHas(mesas, [ /* ... */ ]);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $mesa = mesas::factory()->create();

        $response = $this->get(route('mesa.show', $mesa));

        $response->assertOk();
        $response->assertViewIs('mesa.show');
        $response->assertViewHas('mesa');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $mesa = mesas::factory()->create();

        $response = $this->get(route('mesa.edit', $mesa));

        $response->assertOk();
        $response->assertViewIs('mesa.edit');
        $response->assertViewHas('mesa');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\mesasController::class,
            'update',
            \App\Http\Requests\mesasUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $mesa = mesas::factory()->create();

        $response = $this->put(route('mesa.update', $mesa));

        $mesa->refresh();

        $response->assertRedirect(route('mesa.index'));
        $response->assertSessionHas('mesa.id', $mesa->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $mesa = mesas::factory()->create();
        $mesa = Mesa::factory()->create();

        $response = $this->delete(route('mesa.destroy', $mesa));

        $response->assertRedirect(route('mesa.index'));

        $this->assertDeleted($mesa);
    }
}
