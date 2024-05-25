@extends('layout')

@section('content')
    <div class=index-top>
                <h2 class=index-titre>Votre Carte du Midi</h2>
                <a class="btn btn-outline-success" href="{{ route('carteboisson.create') }}"> Créer une nouvelle boisson dans la carte</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="index-content">
        <h2 class="index-titre">Les Boissons Fraiches</h2>
        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th>Ingrédients</th>
                <th>Prix</th>
                <th>Ordre</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($carteboissonfraiche as $fraiche)
                <tr>
                    <td>{{ $fraiche->nom }}</td>
                    <td>{{ $fraiche->ingredient }}</td>
                    <td>{{ $fraiche->prix}}€</td>
                    <td>{{ $fraiche->ordre }}</td>
                    <td>
                        @if ($fraiche->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('carteboisson.destroy', $fraiche->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('carteboisson.edit', $fraiche->id) }}">Éditer</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <h2 class="index-titre">Les Boissons Chaudes</h2>

        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th>Ingrédients</th>
                <th>Ordre</th>
                <th>Prix</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($carteboissonchaude as $chaude)
                <tr>
                    <td>{{ $chaude->nom }}</td>
                    <td>{{ $chaude->ingredient }}</td>
                    <td>{{ $chaude->ordre }}</td>
                    <td>{{ $chaude->prix}}€</td>

                    <td>
                        @if ($chaude->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('carteboisson.destroy', $chaude->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('carteboisson.edit', $chaude->id) }}">Éditer</a>

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
