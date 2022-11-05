<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Reservacione;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\reservacionesController
 */
class reservacionesControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $reservaciones = reservaciones::factory()->count(3)->create();

        $response = $this->get(route('reservacione.index'));

        $response->assertOk();
        $response->assertViewIs('reservacione.index');
        $response->assertViewHas('reservaciones');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('reservacione.create'));

        $response->assertOk();
        $response->assertViewIs('reservacione.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\reservacionesController::class,
            'store',
            \App\Http\Requests\reservacionesStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $response = $this->post(route('reservacione.store'));

        $response->assertRedirect(route('reservacione.index'));
        $response->assertSessionHas('reservacione.id', $reservacione->id);

        $this->assertDatabaseHas(reservaciones, [ /* ... */ ]);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $reservacione = reservaciones::factory()->create();

        $response = $this->get(route('reservacione.show', $reservacione));

        $response->assertOk();
        $response->assertViewIs('reservacione.show');
        $response->assertViewHas('reservacione');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $reservacione = reservaciones::factory()->create();

        $response = $this->get(route('reservacione.edit', $reservacione));

        $response->assertOk();
        $response->assertViewIs('reservacione.edit');
        $response->assertViewHas('reservacione');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\reservacionesController::class,
            'update',
            \App\Http\Requests\reservacionesUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $reservacione = reservaciones::factory()->create();

        $response = $this->put(route('reservacione.update', $reservacione));

        $reservacione->refresh();

        $response->assertRedirect(route('reservacione.index'));
        $response->assertSessionHas('reservacione.id', $reservacione->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $reservacione = reservaciones::factory()->create();
        $reservacione = Reservacione::factory()->create();

        $response = $this->delete(route('reservacione.destroy', $reservacione));

        $response->assertRedirect(route('reservacione.index'));

        $this->assertDeleted($reservacione);
    }
}
