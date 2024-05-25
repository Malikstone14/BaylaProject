<?php

namespace App\Http\Controllers;

use App\Models\CarrouselPresse;
use Illuminate\Http\Request;

class CarrouselPresseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrouselpresse = CarrouselPresse::orderBy('ordre', 'asc')->get();


        return view('carrouselpresse.index', compact('carrouselpresse'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrouselpresse = CarrouselPresse::all();
        return view('carrouselpresse.create', compact('carrouselpresse'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'ordre' => 'required',
        ]);

        CarrouselPresse::create($request->all());

        return redirect()->route('carrouselpresse.index')
            ->with('success', 'Onglet de carrousel créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarrouselPresse  $carrouselPresse
     * @return \Illuminate\Http\Response
     */
    public function show(CarrouselPresse $carrouselPresse)
    {
        return view('carrouselpresse.show', compact('carrouselpresse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarrouselPresse  $carrouselPresse
     * @return \Illuminate\Http\Response
     */
    public function edit(CarrouselPresse $carrouselpresse, Request $request)
    {
        
        return view('carrouselpresse.edit', compact('carrouselpresse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarrouselPresse  $carrouselPresse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarrouselPresse $carrouselpresse)
    {
        $request->validate([
            'titre' => 'required',
            'ordre' => 'required',
            'URL' => 'required',
            'chemin' => 'required'
        ]);
        $carrouselpresse->update($request->all());
        return redirect()->route('carrouselpresse.index')
            ->with('success', 'Votre carrousel a été mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarrouselPresse  $carrouselPresse
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarrouselPresse $carrouselpresse)
    {
        $carrouselpresse->delete();

        return redirect()->route('carrouselpresse.index')
            ->with('success', 'Votre onglet de carrousel a été supprimé avec succès');
    }
}
