@extends('layout')
<div class="back">
    @section('content')

        <h2 style="margin: 2%">Modifier Votre carte de Cocktails & Alcools</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oups! </strong> Il y a eu des problèmes avec votre entrée.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('cartealcool.update', $cartealcool->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="container-edit">
                <div>
                    <div class="row col-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nom</strong>
                                <input type="text" name="nom" value="{{ $cartealcool->nom }}" class="form-control"
                                    placeholder="Saisir le nom">
                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Ingrédient ou détails</strong>
                                <input type="text" name="ingredient" value="{{ $cartealcool->ingredient }}" class="form-control"
                                    placeholder="Saisir vos ingrédients ou vos détails (facultatif)">
                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="form-group">
                                <strong>Ordre</strong>
                                <input type="number" name="ordre" value="{{ $cartealcool->ordre }}" class="form-control"
                                    placeholder="Saisir un ordre d'apparition">
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="form-group">
                                <strong>Prix</strong>
                                <input type="number" name="prix" value="{{ $cartealcool->prix }}" step="any" class="form-control"
                                    placeholder="Saisir un Prix">
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="form-group">
                                <strong>Prix 2</strong>
                                <input type="number" name="prix2" value="{{ $cartealcool->prix2 }}" step="any" class="form-control"
                                    placeholder="Saisir un Prix (facultatif)">
                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <strong for="typealcool">Type de boisson</strong>
                            <br>
                            <select name="typealcool" id="typealcool" onchange=AfficherChoixBiere(this)>
                                <option disabled selected value> -- Selectionnez un type de boisson -- </option>
                                <option value="signature">Signature</option>
                                <option value="biere">Bière</option>
                                <option value="spiritueux">Spiritueux</option>
                                <option value="gin">Gin</option>
                                <option value="champagne">Champagne</option>
                            </select>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6" id="typebiere" >
                            <strong for="biere">Type de bière</strong>
                            <br>
                            <select name="biere">
                                <option value="pression">Bière Pression</option>
                                <option value="bouteille">Bière Bouteille</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <strong for="active">Affichage</strong>
                            <br>
                            <select name="active" id="active">
                                <option disabled selected value> -- Selectionnez une option -- </option>
                                <option value="1">Visible</option>
                                <option value="0">Non Visible</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                        <a class="btn btn-danger" href="{{ route('cartealcool.index') }}"> Retour</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
