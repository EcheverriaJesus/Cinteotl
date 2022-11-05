<?php

namespace App\Http\Controllers;

use App\Bebida;
use App\Http\Requests\bebidasStoreRequest;
use App\Http\Requests\bebidasUpdateRequest;
use App\bebida;
use Illuminate\Http\Request;

class bebidasController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bebidas = Bebida::all();

        return view('bebida.index', compact('bebidas'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('bebida.create');
    }

    /**
     * @param \App\Http\Requests\bebidasStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(bebidasStoreRequest $request)
    {
        $bebida = Bebida::create($request->validated());

        $request->session()->flash('bebida.id', $bebida->id);

        return redirect()->route('bebida.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\bebida $bebida
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, bebida $bebida)
    {
        return view('bebida.show', compact('bebida'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\bebida $bebida
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, bebida $bebida)
    {
        return view('bebida.edit', compact('bebida'));
    }

    /**
     * @param \App\Http\Requests\bebidasUpdateRequest $request
     * @param \App\bebida $bebida
     * @return \Illuminate\Http\Response
     */
    public function update(bebidasUpdateRequest $request, bebida $bebida)
    {
        $bebida->update($request->validated());

        $request->session()->flash('bebida.id', $bebida->id);

        return redirect()->route('bebida.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\bebida $bebida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, bebida $bebida)
    {
        $bebida->delete();

        return redirect()->route('bebida.index');
    }
}
