<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionControler extends Controller
{
    public function formulaire()
    {
        return view("connexion");
    }

    public function traitementConnexion()
    {

        request()->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);


        return "traitement formulaire connexion";
    }
}
