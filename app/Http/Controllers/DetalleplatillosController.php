<?php

namespace App\Http\Controllers;

use App\Detalleplatillo;
use App\Http\Requests\detalleplatillosStoreRequest;
use App\Http\Requests\detalleplatillosUpdateRequest;
use App\detalleplatillo;
use Illuminate\Http\Request;

class detalleplatillosController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $detalleplatillos = Detalleplatillo::all();

        return view('detalleplatillo.index', compact('detalleplatillos'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('detalleplatillo.create');
    }

    /**
     * @param \App\Http\Requests\detalleplatillosStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(detalleplatillosStoreRequest $request)
    {
        $detalleplatillo = Detalleplatillo::create($request->validated());

        $request->session()->flash('detalleplatillo.id', $detalleplatillo->id);

        return redirect()->route('detalleplatillo.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\detalleplatillo $detalleplatillo
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, detalleplatillo $detalleplatillo)
    {
        return view('detalleplatillo.show', compact('detalleplatillo'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\detalleplatillo $detalleplatillo
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, detalleplatillo $detalleplatillo)
    {
        return view('detalleplatillo.edit', compact('detalleplatillo'));
    }

    /**
     * @param \App\Http\Requests\detalleplatillosUpdateRequest $request
     * @param \App\detalleplatillo $detalleplatillo
     * @return \Illuminate\Http\Response
     */
    public function update(detalleplatillosUpdateRequest $request, detalleplatillo $detalleplatillo)
    {
        $detalleplatillo->update($request->validated());

        $request->session()->flash('detalleplatillo.id', $detalleplatillo->id);

        return redirect()->route('detalleplatillo.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\detalleplatillo $detalleplatillo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, detalleplatillo $detalleplatillo)
    {
        $detalleplatillo->delete();

        return redirect()->route('detalleplatillo.index');
    }
}
