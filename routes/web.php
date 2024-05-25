<?php

use App\Models\User;
use App\Models\CarteVin;
use App\Models\CarteMidi;
use App\Models\CarteApero;
use App\Models\CarteTapas;
use App\Models\CarrouselPresse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConnexionControler;
use App\Http\Controllers\CarrouselController;
use App\Http\Controllers\CarteMidiController;
use App\Http\Controllers\HomeTexteController;
use App\Http\Controllers\CarteAperoController;
use App\Http\Controllers\CarrouselPresseController;
use App\Http\Controllers\CarteAlcoolController;
use App\Http\Controllers\CarteBoissonController;
use App\Http\Controllers\MailController;
use App\Models\CarteAlcool;
use App\Models\CarteBoisson;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeControler::class, "index"]);

Route::get('carte', function () {
    // APPELLE TOUTES LES REQUETES NECESSAIRE A L'AFFICHAGE DU MENU DU MIDI

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
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('evenement', function () {
    return view('evenement');
});
Route::get('galerie', function () {
    return view('galerie');
});
Route::get('reservation', function () {
    return view('reservation');
});

Route::get('getconfirmation', function () {
    return view('email.getconfirmation');
})->middleware('auth');

Route::post('/email.markdowncontact', [MailController::class, 'Sendcontact']);
Route::post('/email.markdownreservation', [MailController::class, 'Sendreservation']);
route::post('/email.markdownconfirmation', [MailController::class, 'Sendconfirmation']);
Route::get('/email.getconfirmation', [MailController::class, 'Getconfirmation']);

Route::resource('carrousel', CarrouselController::class)->middleware('auth');
Route::resource('hometexte', HomeTexteController::class)->middleware('auth');
Route::resource('carrouselpresse', CarrouselPresseController::class)->middleware('auth');
Route::resource('cartemidi', CarteMidiController::class)->middleware('auth');
Route::resource('carteapero', CarteAperoController::class)->middleware('auth');
Route::resource('user', UserController::class)->middleware('auth');
Route::resource('cartealcool', CarteAlcoolController::class)->middleware('auth');
Route::resource('carteboisson', CarteBoissonController::class)->middleware('auth');

require __DIR__ . '/auth.php';
