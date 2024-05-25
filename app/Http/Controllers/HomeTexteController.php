<?php

namespace App\Http\Controllers;

use App\Models\HomeTexte;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeControler;
use Illuminate\Support\Facades\Log;


class HomeTexteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeTexte  $homeTexte
     * @return \Illuminate\Http\Response
     */
    public function show(HomeTexte $homeTexte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeTexte  $homeTexte
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeTexte $homeTexte)
    {
        // return view('/', compact('carrousel', 'homeText'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeTexte  $homeTexte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeTexte $homeTexte)
    {
        $request->validate([
            'home_titre' => 'required',
            'home_texte' => 'required',
        ]);

        $data = [
            'home_titre'  => $request->home_titre,
            'home_texte' => $request->home_texte
        ];
        $homeTexte = HomeTexte::find(1);
        $homeTexte->fill($data);
        $homeTexte->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeTexte  $homeTexte
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeTexte $homeTexte)
    {
        //
    }
}
