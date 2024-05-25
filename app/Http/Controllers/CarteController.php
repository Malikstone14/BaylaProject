<?php

namespace App\Http\Controllers;

use App\Models\CarteVin;
use App\Models\CarteMidi;
use App\Models\CarteApero;
use App\Models\CarteAlcool;
use App\Models\CarteBoisson;


class CarteContoller extends Controller
{
    public function index()
    {
        $cartemidi = CarteMidi::all();
    $cartemidientree = CarteMidi::where('section', 'entree' )->where('active', 1)->orderby('ordre', 'asc')->get();
    $cartemidiplat = CarteMidi::where('section', 'plat' )->where('active', 1)->orderby('ordre', 'asc')->get();
    $cartemididessert = CarteMidi::where('section', 'dessert' )->where('active', 1)->orderby('ordre', 'asc')->get();

    //APPELLE TOUTES LES REQUETES NECESSAIRE A L'AFFICHAGE DE LA CARTE DES VINS

    $cartevin = CarteVin::all();
    $cartevinrouge = CarteVin::where('section', 'rouge')->get();
    $cartevinblanc = CarteVin::where('section', 'blanc')->get();
    $cartevinrose = CarteVin::where('section', 'rosé')->get();
    $cartevinchampagne = CarteVin::where('section', 'champagne')->get();

    //APPELLE TOUTES LES REQUETES NECESSAIRE A L'AFFICHAGE DE LA CARTE DES TAPAS

    $carteapero = CarteApero::orderBy('ordre', 'asc')->where('active', 1)->get();

    //APPELLE TOUTES LES REQUETES NECESSAIRE A L'AFFICHAGE DE LA CARTE COCKTAIL

    $cartealcool = CarteAlcool::all();
    $cartesignature = CarteAlcool::where('section', 'signature')->where('active', 1)->orderby('ordre', 'asc')->get();
    $cartebierepress = CarteAlcool::where('section', 'biere')->where('biere', 'pression')->where('active', 1)->orderby('ordre', 'asc')->get();
    $cartebierebout = CarteAlcool::where('section', 'biere')->where('biere', 'bouteille')->where('active', 1)->orderby('ordre', 'asc')->get();
    $cartespiritueux = CarteAlcool::where('section', 'spiritueux')->where('active', 1)->orderby('ordre', 'asc')->get();
    $cartegin = CarteAlcool::where('section', 'gin')->where('active', 1)->orderby('ordre', 'asc')->get();
    $cartechampagne = CarteAlcool::where('section', 'champagne')->where('active', 1)->orderby('ordre', 'asc')->get();

    //APPELLE TOUTES LES REQUETES NECESSAIRE A L'AFFICHAGE DE LA CARTE BOISSON

    $carteboisson = CarteBoisson::all();
    $carteboissonfraiche = CarteBoisson::where('section', 'fraiche')->where('active', 1)->orderby('ordre', 'asc')->get();
    $carteboissonchaude = CarteBoisson::where('section', 'chaude')->where('active', 1)->orderby('ordre', 'asc')->get();


    return view('carte', compact('carteboissonchaude','carteboissonfraiche','carteboisson','cartechampagne','cartegin','cartespiritueux','cartebierebout','cartebierepress','cartesignature','cartealcool','cartemidi','cartemidientree', 'cartemidiplat', 'cartemididessert', 'cartevin', 'cartevinrouge', 'cartevinblanc', 'cartevinrose', 'cartevinchampagne', 'carteapero'));
    }
}