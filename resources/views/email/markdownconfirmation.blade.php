@component('mail::message')
<h1 style="text-align:center">Votre demande de réservation </h1>
<br>


<p style="text-align: center">Bonjour, {{$_POST['name']}}</p>

<p style="text-align: center"> Nous vous confirmons votre réservation le {{$_POST['date']}} à {{$_POST['heure']}} pour {{$_POST["nbpersonne"]}}</p>
<p style="text-align: center"> Nous vous attendons avec impatience ! </p>

<br>
A très vite !
<br>
Caro et Mathias du Bayla
@endcomponent
