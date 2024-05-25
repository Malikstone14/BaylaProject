@extends('layout')


@section('content')
<script src="contact.js"></script>
    <link rel="stylesheet" href="/css/contact.css">
        <body>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="contact-container">
                <div class="left-col">
                </div>
                <div class="right-col">
                    <h1>Formulaire de contact</h1>

                    <form id="contact-form" action="email.markdowncontact" method="post">
                        @csrf
                        <label for="name">Nom & Prénom</label>
                        <input type="text" id="name" name="name" placeholder="Votre nom et prénom" required>
                        <label for="sujet">Sujet</label>
                        <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">
                        <label for="email">Adresse Email</label>
                        <input type="email" id="email" name="email" placeholder="Votre adresse Mail" required>
                        <label for="message">Message</label>
                        <textarea rows="6" placeholder="Votre Message" id="message" name="message" required></textarea>
                        <button type="submit" id="submit" name="submit">Envoyer</button>

                    </form>
                    <div id="error"></div>
                    <div id="success-msg"></div>
                </div>
            </div>

       <body>
           @if ($message = Session::get('success'))
           <div class="alert alert-success">
               <p>{{ $message }}</p>
           </div>
           @endif
           <div class="contact-container">
            <div class="right-col">
                <h1>Nous Retrouver</h1>
     
                <div class="coordonnée">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2607.9838384567047!2d-0.37230648426622903!3d49.18189328582764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480a43c0d1430323%3A0x1a21f5923c312601!2sBayla%20-%20Caf%C3%A9%20-%20Cocktails%20-%20Restaurant%20%F0%9F%94%A5!5e0!3m2!1sfr!2sfr!4v1661250016402!5m2!1sfr!2sfr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <br>
                    <p>Bayla Restaurant <br>
                        47 Rue Écuyère, 14000 Caen <br>
                        02.31.91.20.83 <br>
                    </p>
                    <br>
                        <p>Lundi Fermé</p>
                        <p>mardi 11:45–01:00</p>
                        <p>mercredi 11:45–01:00</p>
                        <p>jeudi 11:45–01:00</p>
                        <p>vendredi 11:45–01:00</p>
                        <p>samedi 11:45–01:00</p>
                        <p>dimanche Fermé</p>
                </div>
                
            </div>
               <div class="left-col">
               </div>

           </div>
    </body>

        <hr>
        <div class='widget-avis'>
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-c9f4621f-a47d-4f8a-a562-3d93bd1bb1ec"></div>
        </div>
</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
