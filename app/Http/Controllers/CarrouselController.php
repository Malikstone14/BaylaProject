<?php

namespace App\Http\Controllers;

use App\Models\Carrousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CarrouselController extends Controller
{
    public function index()
    {
        $carrousel = Carrousel::orderBy('ordre', 'asc')->get();


        return view('carrousel.index', compact('carrousel'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrousel = Carrousel::all();
        return view('carrousel.create', compact('carrousel'));
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
            'texte' => 'required',
            'ordre' => 'required',
        ]);

        Carrousel::create($request->all());

        return redirect()->route('carrousel.index')
            ->with('success', 'Onglet de carrousel créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrousel  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Carrousel $carrousel)
    {
        return view('carrousel.show', compact('carrousel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrousel  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrousel $carrousel, Request $request)
    {
        return view('carrousel.edit', compact('carrousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrousel  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrousel $carrousel)
    {
        $request->validate([
            'titre' => 'required',
            'texte' => 'required',
            'ordre' => 'required',
        ]);
        $carrousel->update($request->all());
        return redirect()->route('carrousel.index')
            ->with('success', 'Votre carrousel a été mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrousel  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrousel $carrousel)
    {
        $carrousel->delete();

        return redirect()->route('carrousel.index')
            ->with('success', 'Votre onglet de carrousel a été supprimé avec succès');
    }
}
