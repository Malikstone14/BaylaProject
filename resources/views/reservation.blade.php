@extends('layout')


@section('content')
    <link rel="stylesheet" href="/css/reservation.css">

    <body>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="contact-container">
            <div class="right-col">
                <h1>Formulaire de Réservation</h1>

                <form id="contact-form" action="email.markdownreservation" method="post">
                    @csrf
                    <label for="name">Nom & Prénom</label>
                    <input type="text" id="name" name="name" placeholder="Votre nom et prénom" required>
                    <label for="email">Adresse Email</label>
                    <input type="email" id="email" name="email" placeholder="Votre adresse Mail" required>
                    <label for="phone">Numéro de téléphone</label>
                    <input type="tel" pattern="0[1-68]([-. ]?[0-9]{2}){4}" placeholder="0612345678" id="phone" name="phone" >
                    <label for="date">Date</label>
                    <input type="text" readonly class="date" id="date" name="date">
                    <label for="sujet">Service</label>
                    <select name="heure">
                        <option disabled selected value> -- Selectionnez une heure -- </option>
                        <option value="12h">12h00</option>
                        <option value="12h30">12h30</option>
                        <option value="13h">13h00</option>
                        <option value="13h30">13h30</option>
                        <option value="14h">14h00</option>
                        <option value="14h30">14h30</option>
                        <option value="15h">15h00</option>
                        <option value="15h30">15h30</option>
                        <option value="16h">16h00</option>
                        <option value="16h30">16h30</option>
                        <option value="17h">17h00</option>
                        <option value="17h30">17h30</option>
                        <option value="18h">18h00</option>
                        <option value="18h30">18h30</option>
                        <option value="19h">19h00</option>
                        <option value="19h30">19h30</option>
                        <option value="20h">20h00</option>
                        <option value="20h30">20h30</option>
                        <option value="21h">21h00</option>
                        <option value="21h30">21h30</option>
                        <option value="22h">22h00</option>
                    </select>
                    <br>
                    <label for="nbpersonne">Nombre de personnes</label>
                    <input type="number" name='nbpersonne' id='nbpersonne'>
                    <label for="message">Précision (facultatif)</label>
                    <textarea rows="6" placeholder="Saisissez vos précisions" id="message" name="message" value=""></textarea>
                    <button type="submit" id="submit" name="submit">Envoyer</button>

                </form>
                <div id="error"></div>
                <div id="success-msg"></div>
            </div>
            <div class="left-col">
            </div>

        </div>
    </body>

    <script src="js/reservation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
