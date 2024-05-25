<?php

namespace App\Http\Controllers;

use App\Models\CarteAlcool;
use Illuminate\Http\Request;

class CarteAlcoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartealcool = CarteAlcool::all();
        $cartesignature = CarteAlcool::where('section', 'signature')->orderby('ordre', 'asc')->orderBy('active', 'desc')->get();
        $cartebiere = CarteAlcool::where('section', 'biere')->orderBy('biere', 'asc')->orderby('ordre', 'asc')->orderBy('active', 'desc')->get();
        $cartespiritueux = CarteAlcool::where('section', 'spiritueux')->orderby('ordre', 'asc')->orderBy('active', 'desc')->get();
        $cartegin = CarteAlcool::where('section', 'gin')->orderby('ordre', 'asc')->orderBy('active', 'desc')->get();
        $cartechampagne = CarteAlcool::where('section', 'champagne')->orderby('ordre', 'asc')->orderBy('active', 'desc')->get();

        return view('cartealcool.index', compact('cartechampagne','cartegin','cartespiritueux','cartebiere','cartesignature','cartealcool'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartealcool = CarteAlcool::all();
        return view('cartealcool.create', compact('cartealcool'));
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

        CarteAlcool::create($request->all());

        return redirect()->route('cartealcool.index')
            ->with('success', 'Votre boisson a bien été ajouté à votre carte.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarteAlcool  $carteAlcool
     * @return \Illuminate\Http\Response
     */
    public function show(CarteAlcool $cartealcool)
    {
        return view('cartealcool.show', compact('cartealcool'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarteAlcool  $carteAlcool
     * @return \Illuminate\Http\Response
     */
    public function edit(CarteAlcool $cartealcool)
    {
        return view('cartealcool.edit', compact('cartealcool'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarteAlcool  $carteAlcool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarteAlcool $cartealcool)
    {
        $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'ordre' => 'required',
        ]);
        $cartealcool->update($request->all());
        return redirect()->route('cartealcool.index')
            ->with('success', 'Votre boisson a bien été mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarteAlcool  $carteAlcool
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarteAlcool $cartealcool)
    {
        $cartealcool->delete();

        return redirect()->route('cartealcool.index')
            ->with('success', 'Votre boisson a bien été supprimée de votre carte');
    }
}
