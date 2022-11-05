<?php

namespace App\Http\Controllers;

use App\Http\Requests\ventasStoreRequest;
use App\Http\Requests\ventasUpdateRequest;
use App\Venta;
use App\venta;
use Illuminate\Http\Request;

class ventasController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ventas = Venta::all();

        return view('venta.index', compact('ventas'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('venta.create');
    }

    /**
     * @param \App\Http\Requests\ventasStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ventasStoreRequest $request)
    {
        $venta = Venta::create($request->validated());

        $request->session()->flash('venta.id', $venta->id);

        return redirect()->route('venta.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\venta $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, venta $venta)
    {
        return view('venta.show', compact('venta'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\venta $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, venta $venta)
    {
        return view('venta.edit', compact('venta'));
    }

    /**
     * @param \App\Http\Requests\ventasUpdateRequest $request
     * @param \App\venta $venta
     * @return \Illuminate\Http\Response
     */
    public function update(ventasUpdateRequest $request, venta $venta)
    {
        $venta->update($request->validated());

        $request->session()->flash('venta.id', $venta->id);

        return redirect()->route('venta.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\venta $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, venta $venta)
    {
        $venta->delete();

        return redirect()->route('venta.index');
    }
}
