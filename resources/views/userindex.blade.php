@extends('layout')

@section('content')
    <div class="index-top">
        <h2 class="index-titre">Liste des onglets du carrousel</h2>
        <a class="btn btn-outline-success" href="{{ route('register') }}"> Créer un nouvel Utilisateur</a>
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
                <th>Email</th>
                <th>Role</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($user as $user)
                <tr>
                    <td>{{ $user->nom }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if ($user->profil == 0)
                         Admin
                        @else
                         Employé     
                        @endif
                        </td>
                    <td>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                    
                        
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