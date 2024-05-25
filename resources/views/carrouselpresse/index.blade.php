@extends('layout')

@section('content')
    <div class="index-top"> 
        <h2 class='index-titre'>Liste des Article de Presse</h2>
        <a class="btn btn-outline-success" href="{{ route('carrouselpresse.create') }}"> Inserer un nouvel Article de Presse</a>
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
                <th>Ordre</th>
                <th>Image</th>
                <th>Redirection</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($carrouselpresse as $article)
                <tr>
                    <td>{{ $article->titre }}</td>
                    <td>{{ $article->ordre }}</td>
                    <td><img class='img-index' src="/image/{{ $article->chemin }}" alt="{{ $article->chemin }}">
                    </td>
                    <td>{{ $article->URL }}</td>
                    <td>
                        @if ($article->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('carrouselpresse.destroy', $article->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('carrouselpresse.edit', $article->id) }}">Éditer</a>

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
