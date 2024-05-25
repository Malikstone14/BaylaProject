@extends('layout')
<div class="back">
    @section('content')


        <h2 style="margin: 2%">Ajouter un nouvel article</h2>


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

        <form action="{{ route('cartealcool.store') }}" method="POST">
            @csrf

            <div class="container-edit">
                <div class="row col-12">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nom</strong>
                            <input type="text" name="nom" value="" class="form-control"
                                placeholder="Saisir le nom">
                        </div>
                    </div>
                </div>
                <div class="row col-12">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Ingrédients ou détails</strong>
                            <textarea type="text" name="ingredient" value="" class="form-control" placeholder="Saisir vos ingrédients ou vos détails"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row col-12">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Ordre</strong>
                            <input type="number" name="ordre" value="" class="form-control"
                                placeholder="Saisir un stock">
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Prix</strong>
                            <input type="number" step=".01" name="prix" value="" class="form-control"
                                placeholder="Saisir un prix">
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Prix 2</strong>
                            <input type="number" step=".01" name="prix2" value="" class="form-control"
                                placeholder="Saisir un prix (facultatif)">
                        </div>
                    </div>
                </div>
                <div class="row col-12">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <strong for="section">Type de boisson</strong>
                        <br>
                        <select name="section" id="typealcool" onchange=AfficherChoixBiere(this)>
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
                            <option disabled selected value value="1"> -- Selectionnez une option -- </option>
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
        </form>
    </div>
@endsection
