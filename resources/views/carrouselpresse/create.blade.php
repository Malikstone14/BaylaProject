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

        <form action="{{ route('carrouselpresse.store') }}" method="POST">
            @csrf

            <div class="container-edit">
                {{-- <div class="row col-12">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Texte</strong>
                            <textarea type="text" name="texte" value="" class="form-control" placeholder="Saisir un texte"></textarea>
                        </div>
                    </div>
                </div> --}}
                <div class="row col-12">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Titre</strong>
                            <input type="text" name="titre" value="" class="form-control"
                                placeholder="Saisir le titre">
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
                    <div class="col-xs-9 col-sm-9 col-md-9">
                        <div class="form-group">
                            <strong>URL</strong>
                            <input type="text" name="URL" value="" class="form-control"
                                placeholder="Saisir un URL">
                        </div>
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
                <div style="margin-top:1%" class="row col-12">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Inserer une nouvelle image</strong>
                            <input type="file" name="chemin" value="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                    <a class="btn btn-danger" href="{{ route('carrouselpresse.index') }}"> Retour</a>
                </div>
            </div>
        </form>
    </div>
@endsection
