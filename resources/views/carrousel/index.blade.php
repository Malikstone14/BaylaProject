@extends('layout')

@section('content')
    <div class="index-top">
        <h2 class="index-titre">Liste des onglets du carrousel</h2>
        <a class="btn btn-outline-success" href="{{ route('carrousel.create') }}"> Créer un nouvel onglet pour le
            carrousel</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="index-content">
        <table class="table table-bordered">
            <tr>
                <th>Titre</th>
                <th>Texte</th>
                <th>Ordre</th>
                <th>Image</th>
                <th>Redirection</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($carrousel as $ongletCarrousel)
                <tr>
                    <td>{{ $ongletCarrousel->titre }}</td>
                    <td>{{ $ongletCarrousel->texte }}</td>
                    <td>{{ $ongletCarrousel->ordre }}</td>
                    <td><img class='img-index' src="/image/{{ $ongletCarrousel->chemin }}" alt="{{ $ongletCarrousel->chemin }}"></td>
                    <td>{{ $ongletCarrousel->URL }}</td>
                    <td>
                        @if ($ongletCarrousel->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('carrousel.destroy', $ongletCarrousel->id) }}" method="POST">
                        
                            <a class="btn btn-outline-success" href="{{ route('carrousel.edit', $ongletCarrousel->id) }}">Éditer</a>
                        
                            @csrf
                            @method('DELETE')
                        
                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
