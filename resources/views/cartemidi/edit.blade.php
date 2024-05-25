@extends('layout')
<div class="back">
    @section('content')

        <h2 style="margin: 2%">Modifier votre ligne</h2>

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


        <form action="{{ route('cartemidi.update', $cartemidi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="container-edit">
                <div>
                    <div class="row col-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nom</strong>
                                <input type="text" name="nom" value="{{ $cartemidi->nom }}"
                                    class="form-control" placeholder="Saisir le nom">
                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Texte</strong>
                                <input type="text" name="ingredient" value="{{ $cartemidi->ingredient }}"
                                    class="form-control" placeholder="Saisir vos ingrédients ou détails">
                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="form-group">
                                <strong>Ordre</strong>
                                <input type="number" name="ordre" value="{{ $cartemidi->ordre }}"
                                    class="form-control" placeholder="Saisir un ordre d'apparition">
                            </div>
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
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <strong for="active">Section</strong>
                            <br>
                            <select name="section" id="section">
                                <option disabled selected value> -- Selectionnez une option -- </option>
                                <option value="entree">Entrée</option>
                                <option value="plat">Plat</option>
                                <option value="dessert">Dessert</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                        <a class="btn btn-danger" href="{{ route('cartemidi.index') }}"> Retour</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
