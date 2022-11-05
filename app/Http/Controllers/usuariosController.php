<?php

namespace App\Http\Controllers;

use App\Http\Requests\usuariosStoreRequest;
use App\Http\Requests\usuariosUpdateRequest;
use App\Usuario;
use App\usuario;
use Illuminate\Http\Request;

class usuariosController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuarios = Usuario::all();

        return view('usuario.index', compact('usuarios'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('usuario.create');
    }

    /**
     * @param \App\Http\Requests\usuariosStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(usuariosStoreRequest $request)
    {
        $usuario = Usuario::create($request->validated());

        $request->session()->flash('usuario.id', $usuario->id);

        return redirect()->route('usuario.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\usuario $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, usuario $usuario)
    {
        return view('usuario.show', compact('usuario'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\usuario $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, usuario $usuario)
    {
        return view('usuario.edit', compact('usuario'));
    }

    /**
     * @param \App\Http\Requests\usuariosUpdateRequest $request
     * @param \App\usuario $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(usuariosUpdateRequest $request, usuario $usuario)
    {
        $usuario->update($request->validated());

        $request->session()->flash('usuario.id', $usuario->id);

        return redirect()->route('usuario.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\usuario $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuario.index');
    }
}
