<?php

namespace App\Http\Controllers;

use App\Models\CarteBoisson;
use Illuminate\Http\Request;

class CarteBoissonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carteboisson = CarteBoisson::all();
        $carteboissonfraiche = CarteBoisson::where('section', 'fraiche')->where('active', 1)->orderby('ordre', 'asc')->get();
        $carteboissonchaude = CarteBoisson::where('section', 'chaude')->where('active', 1)->orderby('ordre', 'asc')->get();
    
            return view('carteboisson.index', compact('carteboissonchaude','carteboissonfraiche','carteboisson'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carteboisson = CarteBoisson::all();
        return view('carteboisson.create', compact('carteboisson'));
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
            'section' => 'required',
        ]);

        Carteboisson::create($request->all());

        return redirect()->route('carteboisson.index')
            ->with('success', 'Votre boisson a bien été ajouté à votre carte.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarteBoisson  $carteBoisson
     * @return \Illuminate\Http\Response
     */
    public function show(CarteBoisson $carteboisson)
    {
        return view('carteboisson.show', compact('carteboisson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarteBoisson  $carteBoisson
     * @return \Illuminate\Http\Response
     */
    public function edit(CarteBoisson $carteboisson)
    {
        return view('carteboisson.edit', compact('carteboisson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarteBoisson  $carteBoisson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarteBoisson $carteboisson)
    {
        $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'ordre' => 'required',
        ]);
        $carteboisson->update($request->all());
        return redirect()->route('carteboisson.index')
            ->with('success', 'Votre boisson a bien été mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarteBoisson  $carteBoisson
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarteBoisson $carteboisson)
    {
        $carteboisson->delete();

        return redirect()->route('carteboisson.index')
            ->with('success', 'Votre boisson a bien été supprimée de votre carte');
    }
}
