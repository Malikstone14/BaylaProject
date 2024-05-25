@extends('layout')

@section('content')
    <div class=index-top>
                <h2 class=index-titre>Votre Carte du Midi</h2>
                <a class="btn btn-outline-success" href="{{ route('cartemidi.create') }}"> Créer une nouvelle ligne dans la carte</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="index-content">
        <h2 class="index-titre">Vos Entrées</h2>
        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th>Ingrédients</th>
                <th>Ordre</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($cartemidientree as $entree)
                <tr>
                    <td>{{ $entree->nom }}</td>
                    <td>{{ $entree->ingredient }}</td>
                    <td>{{ $entree->ordre }}</td>
                    <td>
                        @if ($entree->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('cartemidi.destroy', $entree->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('cartemidi.edit', $entree->id) }}">Éditer</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <h2 class="index-titre">Vos Plats</h2>
        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th>Ingrédients</th>
                <th>Ordre</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($cartemidiplat as $plat)
                <tr>
                    <td>{{ $plat->nom }}</td>
                    <td>{{ $plat->ingredient }}</td>
                    <td>{{ $plat->ordre }}</td>
                    <td>
                        @if ($plat->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('cartemidi.destroy', $plat->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('cartemidi.edit', $plat->id) }}">Éditer</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <h2 class="index-titre">Vos Desserts</h2>

        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th>Ingrédients</th>
                <th>Ordre</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($cartemididessert as $dessert)
                <tr>
                    <td>{{ $dessert->nom }}</td>
                    <td>{{ $dessert->ingredient }}</td>
                    <td>{{ $dessert->ordre }}</td>
                    <td>
                        @if ($plat->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('cartemidi.destroy', $dessert->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('cartemidi.edit', $dessert->id) }}">Éditer</a>

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
