@extends('layout')


@section('content')
<link rel="stylesheet" href="/css/confirmation.css">

<h2 style="margin: 2%">Résumé de la réservation</h2>

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


        <form action="{{ asset('email.markdownconfirmation') }}" method="POST">
            @csrf
            <div class="container-edit">
                <div>
                    <div class="row col-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nom</strong>
                                <input readonly type="text" name="name" value="{{ $_GET['name']}}"
                                    class="form-control" placeholder="Saisir le nom" required>
                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Email</strong>
                                <input readonly type="email" name="email" value="{{ $_GET['email'] }}"
                                    class="form-control" placeholder="Saisir votre adresse mail" required>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Nom</strong>
                                <input readonly type="phone" name="phone" value="{{ $_GET['phone']}}"
                                    class="form-control" placeholder="Saisir le numéro de téléphone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="form-group">
                                <strong>nombre de personnes</strong>
                                <input readonly type="number" name="nbpersonne" value="{{ $_GET['nbpersonne'] }}"
                                    class="form-control" placeholder="Saisir le nombre de personnes" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <strong for="date">Date</strong>
                        <br>
                            <input readonly type="text" name='date' class='date' value="{{ $_GET['date']}}" required>
                        </select>
                    </div>
                    <div class="col-6">
                        <input readonly type="text" name="heure" id="midi" value="{{$_GET['heure']}}">
                    </div>
                    <br>
                    <br>
                    @if(isset($_GET['message']))
                        <strong for="message">Message du Client</strong>
                        <br>
                        <textarea readonly rows="3" placeholder="message du client" id="message" name="message" >{{$_GET['message']}}</textarea>
                    @endif
                    <br>
                    <br>
                    <strong for="proposition">Si vous souhaitez faire une proposition au client d'un nouvel horaire !</strong>
                    <br>
                    <textarea rows="6" placeholder="Néanmoins, nous pouvons vous proposez ......... " id="proposition" name="proposition" ></textarea>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
                        <button type="submit" name="valider" id='valider' class="btn btn-success">Valider</button>
                        <button type="submit" name="proposer" id='proposer' class="btn btn-warning">Proposer</button>
                        <button type="submit" name="refuser" id='refuser' class="btn btn-danger">Refuser</button>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>

    <script src="js/reservation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection