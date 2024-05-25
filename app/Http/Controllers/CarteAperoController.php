<?php

namespace App\Http\Controllers;

use App\Models\CarteApero;
use Illuminate\Http\Request;

class CarteAperoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carteapero = CarteApero::orderBy('ordre', 'asc')->orderBy('active', 'desc')->get();

        return view('carteapero.index', compact('carteapero'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carteapero = CarteApero::all();
        return view('carteapero.create', compact('carteapero'));
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
            'nom' => 'required',
            'prix' => 'required',
            'ordre' => 'required',
        ]);

        CarteApero::create($request->all());

        return redirect()->route('carteapero.index')
            ->with('success', 'Onglet de carrousel créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarteApero  $carteapero
     * @return \Illuminate\Http\Response
     */
    public function show(CarteApero $carteapero)
    {
        return view('carteapero.show', compact('carteapero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\carteapero  $carteapero
     * @return \Illuminate\Http\Response
     */
    public function edit(CarteApero $carteapero , Request $request)
    {
        return view('carteapero.edit', compact('carteapero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\carteapero  $carteapero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarteApero $carteapero)
    {
        $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'ordre' => 'required',
        ]);
        $carteapero->update($request->all());
        return redirect()->route('carteapero.index')
            ->with('success', 'Votre carrousel a été mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarteApero  $carteapero
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarteApero $carteapero)
    {
        $carteapero->delete();

        return redirect()->route('carteapero.index')
            ->with('success', 'Votre onglet de carrousel a été supprimé avec succès');
    }
}
