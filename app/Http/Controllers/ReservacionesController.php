<?php

namespace App\Http\Controllers;

use App\Http\Requests\reservacionesStoreRequest;
use App\Http\Requests\reservacionesUpdateRequest;
use App\Reservacione;
use App\reservacione;
use Illuminate\Http\Request;

class reservacionesController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reservaciones = Reservacione::all();

        return view('reservacione.index', compact('reservaciones'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('reservacione.create');
    }

    /**
     * @param \App\Http\Requests\reservacionesStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(reservacionesStoreRequest $request)
    {
        $reservacione = Reservacione::create($request->validated());

        $request->session()->flash('reservacione.id', $reservacione->id);

        return redirect()->route('reservacione.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\reservacione $reservacione
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, reservacione $reservacione)
    {
        return view('reservacione.show', compact('reservacione'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\reservacione $reservacione
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, reservacione $reservacione)
    {
        return view('reservacione.edit', compact('reservacione'));
    }

    /**
     * @param \App\Http\Requests\reservacionesUpdateRequest $request
     * @param \App\reservacione $reservacione
     * @return \Illuminate\Http\Response
     */
    public function update(reservacionesUpdateRequest $request, reservacione $reservacione)
    {
        $reservacione->update($request->validated());

        $request->session()->flash('reservacione.id', $reservacione->id);

        return redirect()->route('reservacione.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\reservacione $reservacione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, reservacione $reservacione)
    {
        $reservacione->delete();

        return redirect()->route('reservacione.index');
    }
}
