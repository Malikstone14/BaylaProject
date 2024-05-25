@extends('layout')


@section('content')
    <form action="/connexion" method="post" class="section">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">Login</label>
            <div class="control">
                <input class="input" type="text" name="login">
            </div>
            @if ($errors->has('login'))
                <p class="help is-danger">{{ $errors->first('login') }}</p>
            @endif
        </div>

        <div class="field">
            <label class="label">Mot de passe</label>
            <div class="control">
                <input class="input" type="password" name="password">
            </div>
            @if ($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Se connecter</button>
            </div>
        </div>
    </form>

    <body>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
