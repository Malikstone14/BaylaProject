@extends('layout')
<div class="back">
    @section('content')

        <h2 style="margin: 2%">Modifier l'onglet du carrousel</h2>

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


        <form action="{{ route('carrousel.update', $carrousel->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="container-edit">
                <div>
                    <div class="row">
                        <div align="center" class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <img style="width: 40%" src="/image/{{ $carrousel->chemin }}"
                                    alt="{{ $carrousel->chemin }}">
                                <br>
                                <strong>Image Actuelle</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Texte</strong>
                                <input type="text" name="texte" value="{{ $carrousel->texte }}" class="form-control"
                                    placeholder="Saisir un texte">
                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Titre</strong>
                                <input type="text" name="titre" value="{{ $carrousel->titre }}" class="form-control"
                                    placeholder="Saisir le titre">
                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="form-group">
                                <strong>Ordre</strong>
                                <input type="number" name="ordre" value="{{ $carrousel->ordre }}" class="form-control"
                                    placeholder="Saisir un stock">
                            </div>
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-9">
                            <div class="form-group">
                                <strong>URL</strong>
                                <input type="text" name="URL" value="{{ $carrousel->URL }}" class="form-control"
                                    placeholder="Saisir un URL">
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
                    </div>

                    
                    <div style="margin-top:1%" id="photohidden" class="row col-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Inserer une nouvelle image (Conseil : 1900x888p)</strong>
                                <input type="text" name="chemin" value="{{ $carrousel->chemin }}" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                        <a class="btn btn-danger" href="{{ route('carrousel.index') }}"> Retour</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
