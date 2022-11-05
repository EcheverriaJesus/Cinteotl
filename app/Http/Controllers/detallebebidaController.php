<?php

namespace App\Http\Controllers;

use App\Detallebebida;
use App\Http\Requests\detallebebidaStoreRequest;
use App\Http\Requests\detallebebidaUpdateRequest;
use App\detallebebida;
use Illuminate\Http\Request;

class detallebebidaController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $detallebebidas = Detallebebida::all();

        return view('detallebebida.index', compact('detallebebidas'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('detallebebida.create');
    }

    /**
     * @param \App\Http\Requests\detallebebidaStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(detallebebidaStoreRequest $request)
    {
        $detallebebida = Detallebebida::create($request->validated());

        $request->session()->flash('detallebebida.id', $detallebebida->id);

        return redirect()->route('detallebebida.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\detallebebida $detallebebida
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, detallebebida $detallebebida)
    {
        return view('detallebebida.show', compact('detallebebida'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\detallebebida $detallebebida
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, detallebebida $detallebebida)
    {
        return view('detallebebida.edit', compact('detallebebida'));
    }

    /**
     * @param \App\Http\Requests\detallebebidaUpdateRequest $request
     * @param \App\detallebebida $detallebebida
     * @return \Illuminate\Http\Response
     */
    public function update(detallebebidaUpdateRequest $request, detallebebida $detallebebida)
    {
        $detallebebida->update($request->validated());

        $request->session()->flash('detallebebida.id', $detallebebida->id);

        return redirect()->route('detallebebida.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\detallebebida $detallebebida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, detallebebida $detallebebida)
    {
        $detallebebida->delete();

        return redirect()->route('detallebebida.index');
    }
}
