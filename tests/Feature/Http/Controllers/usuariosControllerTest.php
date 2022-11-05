<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\usuariosController
 */
class usuariosControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $usuarios = usuarios::factory()->count(3)->create();

        $response = $this->get(route('usuario.index'));

        $response->assertOk();
        $response->assertViewIs('usuario.index');
        $response->assertViewHas('usuarios');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('usuario.create'));

        $response->assertOk();
        $response->assertViewIs('usuario.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\usuariosController::class,
            'store',
            \App\Http\Requests\usuariosStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $response = $this->post(route('usuario.store'));

        $response->assertRedirect(route('usuario.index'));
        $response->assertSessionHas('usuario.id', $usuario->id);

        $this->assertDatabaseHas(usuarios, [ /* ... */ ]);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $usuario = usuarios::factory()->create();

        $response = $this->get(route('usuario.show', $usuario));

        $response->assertOk();
        $response->assertViewIs('usuario.show');
        $response->assertViewHas('usuario');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $usuario = usuarios::factory()->create();

        $response = $this->get(route('usuario.edit', $usuario));

        $response->assertOk();
        $response->assertViewIs('usuario.edit');
        $response->assertViewHas('usuario');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\usuariosController::class,
            'update',
            \App\Http\Requests\usuariosUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $usuario = usuarios::factory()->create();

        $response = $this->put(route('usuario.update', $usuario));

        $usuario->refresh();

        $response->assertRedirect(route('usuario.index'));
        $response->assertSessionHas('usuario.id', $usuario->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $usuario = usuarios::factory()->create();
        $usuario = Usuario::factory()->create();

        $response = $this->delete(route('usuario.destroy', $usuario));

        $response->assertRedirect(route('usuario.index'));

        $this->assertDeleted($usuario);
    }
}
