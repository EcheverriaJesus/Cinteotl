<?php

namespace App\Http\Controllers;

use App\Http\Requests\mesasStoreRequest;
use App\Http\Requests\mesasUpdateRequest;
use App\Mesa;
use App\mesa;
use Illuminate\Http\Request;

class mesasController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mesas = Mesa::all();

        return view('mesa.index', compact('mesas'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('mesa.create');
    }

    /**
     * @param \App\Http\Requests\mesasStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(mesasStoreRequest $request)
    {
        $mesa = Mesa::create($request->validated());

        $request->session()->flash('mesa.id', $mesa->id);

        return redirect()->route('mesa.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\mesa $mesa
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, mesa $mesa)
    {
        return view('mesa.show', compact('mesa'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\mesa $mesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, mesa $mesa)
    {
        return view('mesa.edit', compact('mesa'));
    }

    /**
     * @param \App\Http\Requests\mesasUpdateRequest $request
     * @param \App\mesa $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(mesasUpdateRequest $request, mesa $mesa)
    {
        $mesa->update($request->validated());

        $request->session()->flash('mesa.id', $mesa->id);

        return redirect()->route('mesa.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\mesa $mesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, mesa $mesa)
    {
        $mesa->delete();

        return redirect()->route('mesa.index');
    }
}
