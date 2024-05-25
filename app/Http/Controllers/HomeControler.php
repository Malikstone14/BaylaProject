<?php

namespace App\Http\Controllers;

use App\Models\Carrousel;
use App\Models\CarrouselPresse;
use App\Models\HomeTexte;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function index()
    {
        $homeTexte = HomeTexte::all();
        $carrouselActive = Carrousel::where('active', 1)->orderby('ordre', 'asc')->get();
        $carrouselActivePresse = CarrouselPresse::where('active', 1)->orderby('ordre', 'asc')->get();
        $modulocarrousel = isset($_GET['media']) ? 1 : 3;
        return view("home", compact('carrouselActive', 'homeTexte', 'carrouselActivePresse', 'modulocarrousel'));
    }
}
