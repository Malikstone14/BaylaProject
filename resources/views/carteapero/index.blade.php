@extends('layout')

@section('content')
    <div class="index-top">
        <h2 class="index-titre">Votre Carte à Tapas</h2>
        <a class="btn btn-outline-success" href="{{ route('carteapero.create') }}"> Créer une nouvelle ligne pour votre carte à Tapas</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="index-content">
        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th>Ingrédients ou détails</th>
                <th>Prix</th>
                <th>Ordre</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($carteapero as $tapas)
                <tr>
                    <td>{{ $tapas->nom }}</td>
                    <td>{{ $tapas->ingredient}}</td>
                    <td>{{ $tapas->prix }}€</td>
                    <td>{{ $tapas->ordre }}</td>
                    <td>
                        @if ($tapas->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('carteapero.destroy', $tapas->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('carteapero.edit', $tapas->id) }}">Éditer</a>

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
