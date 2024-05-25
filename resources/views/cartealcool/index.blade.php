@extends('layout')

@section('content')
    <div class=index-top>
                <h2 class=index-titre>Votre Carte du Midi</h2>
                <a class="btn btn-outline-success" href="{{ route('cartealcool.create') }}"> Créer une nouvelle boisson dans la carte</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="index-content">
        <h2 class="index-titre">Les Signatures</h2>
        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th>Ingrédients</th>
                <th>Prix</th>
                <th>Ordre</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($cartesignature as $signature)
                <tr>
                    <td>{{ $signature->nom }}</td>
                    <td>{{ $signature->ingredient }}</td>
                    <td>{{ $signature->prix}}</td>
                    <td>{{ $signature->ordre }}</td>
                    <td>
                        @if ($signature->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('cartealcool.destroy', $signature->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('cartealcool.edit', $signature->id) }}">Éditer</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <h2 class="index-titre">Les Bieres</h2>
        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th>Ingrédients</th>
                <th>Type</th>
                <th>Prix 1</th>
                <th>Prix 2</th>
                <th>Ordre</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($cartebiere as $biere)
                <tr>
                    <td>{{ $biere->nom }}</td>
                    <td>{{ $biere->ingredient }}</td>
                    <td>{{ $biere->biere}}</td>
                    <td>{{ $biere->prix}}</td>
                    <td>{{ $biere->prix2}}</td>
                    <td>{{ $biere->ordre }}</td>
                    <td>
                        @if ($biere->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('cartealcool.destroy', $biere->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('cartealcool.edit', $biere->id) }}">Éditer</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <h2 class="index-titre">Les Spiritueux</h2>

        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th>Ingrédients</th>
                <th>Ordre</th>
                <th>Prix</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($cartespiritueux as $spiritueux)
                <tr>
                    <td>{{ $spiritueux->nom }}</td>
                    <td>{{ $spiritueux->ingredient }}</td>
                    <td>{{ $spiritueux->ordre }}</td>
                    <td>{{ $spiritueux->prix}}</td>
                    <td>
                        @if ($spiritueux->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('cartealcool.destroy', $spiritueux->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('cartealcool.edit', $spiritueux->id) }}">Éditer</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <h2 class="index-titre">Les Gins</h2>

        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th>Ingrédients</th>
                <th>Ordre</th>
                <th>Prix</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($cartegin as $gin)
                <tr>
                    <td>{{ $gin->nom }}</td>
                    <td>{{ $gin->ingredient }}</td>
                    <td>{{ $gin->ordre }}</td>
                    <td>{{ $gin->prix}}</td>

                    <td>
                        @if ($gin->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('cartealcool.destroy', $gin->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('cartealcool.edit', $gin->id) }}">Éditer</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <h2 class="index-titre">Les Champagnes</h2>

        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th>Ingrédients</th>
                <th>Ordre</th>
                <th>Prix</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($cartechampagne as $champagne)
                <tr>
                    <td>{{ $champagne->nom }}</td>
                    <td>{{ $champagne->ingredient }}</td>
                    <td>{{ $champagne->ordre }}</td>
                    <td>{{ $champagne->prix}}</td>

                    <td>
                        @if ($champagne->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('cartealcool.destroy', $champagne->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('cartealcool.edit', $champagne->id) }}">Éditer</a>

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
