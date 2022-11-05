<?php

namespace App\Http\Controllers;

use App\Http\Requests\platillosStoreRequest;
use App\Http\Requests\platillosUpdateRequest;
use App\Platillo;
use App\platillo;
use Illuminate\Http\Request;

class platillosController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $platillos = Platillo::all();

        return view('platillo.index', compact('platillos'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('platillo.create');
    }

    /**
     * @param \App\Http\Requests\platillosStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(platillosStoreRequest $request)
    {
        $platillo = Platillo::create($request->validated());

        $request->session()->flash('platillo.id', $platillo->id);

        return redirect()->route('platillo.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\platillo $platillo
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, platillo $platillo)
    {
        return view('platillo.show', compact('platillo'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\platillo $platillo
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, platillo $platillo)
    {
        return view('platillo.edit', compact('platillo'));
    }

    /**
     * @param \App\Http\Requests\platillosUpdateRequest $request
     * @param \App\platillo $platillo
     * @return \Illuminate\Http\Response
     */
    public function update(platillosUpdateRequest $request, platillo $platillo)
    {
        $platillo->update($request->validated());

        $request->session()->flash('platillo.id', $platillo->id);

        return redirect()->route('platillo.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\platillo $platillo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, platillo $platillo)
    {
        $platillo->delete();

        return redirect()->route('platillo.index');
    }
}
