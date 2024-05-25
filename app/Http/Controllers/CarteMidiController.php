<?php

namespace App\Http\Controllers;

use App\Models\CarteMidi;
use Illuminate\Http\Request;


class CarteMidiController extends Controller
{

    /**
     * Liste de tous les plats en les rangeants par catégorie, et par ordre mais aussi en prenant en compte leur visibilité.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartemidi = CarteMidi::orderBy('ordre', 'asc')->get();
        $cartemidientree = CarteMidi::where('section', 'entree' )->orderby('ordre', 'asc')->orderBy('active', 'desc')->get();
        $cartemidiplat = CarteMidi::where('section', 'plat' )->orderby('ordre', 'asc')->orderBy('active', 'desc')->get();
        $cartemididessert = CarteMidi::where('section', 'dessert' )->orderby('ordre', 'asc')->orderBy('active', 'desc')->get();

        return view('cartemidi.index', compact('cartemidi', 'cartemidientree','cartemidiplat', 'cartemididessert'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Retourne la vue qui permet de taper les informations dans un formulaire pour la création d'un plat en BDD.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartemidi = Cartemidi::all();
        return view('cartemidi.create', compact('cartemidi'));
    }

    /**
     * Execute la requete SQL qui permet une création de ligne dans la BDD.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'section' => 'required',
            'ordre' => 'required',
        ]);

        Cartemidi::create($request->all());

        return redirect()->route('cartemidi.index')
            ->with('success', 'Onglet de carrousel créé avec succès.');
    }

    /**
     * Retourne la vue qui permet la modification d'une ligne existante.
     *
     * @param  \App\Models\Cartemidi  $cartemidi
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartemidi $cartemidi, Request $request)
    {
        
        return view('cartemidi.edit', compact('cartemidi'));
    }

    /**
     * Execute la requete qui permet la modification d'une ligne déja existante dans la BDD.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cartemidi  $cartemidi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartemidi $cartemidi)
    {
        $request->validate([
            'nom' => 'required',
            'section' => 'required',
            'ordre' => 'required',
        ]);
        $cartemidi->update($request->all());
        return redirect()->route('cartemidi.index')
            ->with('success', 'Votre carrousel a été mis à jour avec succès');
    }

    /**
     * Requete SQL qui supprime la ligne souhaitée.
     *
     * @param  \App\Models\Cartemidi  $cartemidi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartemidi $cartemidi)
    {
        $cartemidi->delete();

        return redirect()->route('cartemidi.index')
            ->with('success', 'Votre onglet de carrousel a été supprimé avec succès');
    }
}
