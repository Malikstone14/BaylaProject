<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayla Restaurant</title>
</head>


<title>Laravel</title>

<!-- Fonts -->
<script src="../js/mediascreen.js"></script>
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Great+Vibes&family=Island+Moments&display=swap" rel="stylesheet">
<link rel="stylesheet" href={{ asset('/css/home.css') }}>
<link rel="stylesheet" href={{ asset('/css/layout.css') }}>
<link rel="stylesheet" href={{ asset('/css/index_carrousel.css') }}>
<link rel="stylesheet" href={{ asset('/css/edit.css') }}>
<link rel="stylesheet" href={{ asset('/css/carte.css') }}>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link data-require="jqueryui@*" data-semver="1.10.0" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/css/smoothness/jquery-ui-1.10.0.custom.min.css" />
  <script data-require="jqueryui@*" data-semver="1.10.0" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
  <script type="text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>



</head>


</head>

{{-- NAVBAR LAYOUT --}}


<nav class="navbar sticky-top navbar-expand-lg navbar-light ">
    
    <div class="container-fluid">
        <div class="reseaulogo">
            <a href="https://www.instagram.com/bayla_restaurant/?hl=fr">
                        <box-icon name='instagram' color="white" type='logo' animation='tada-hover'>
                        </box-icon>
                    </a>
                    <a href="https://www.facebook.com/baylarestaurant">
                        <box-icon name='facebook' color='white' type='logo' animation='tada-hover'>
                        </box-icon>
                    </a>
        </div>
        <div class="logo" >
    <a href="/">
                    <img src="/image/logo2.png"  alt="logo" margin-right="20%" width="130" height="60">
                </a>
    </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            {{-- LES DIFFERENTES SECTIONS DE LA NAVBAR --}}



            <ul class="navbar-nav ">

                <li class="nav-item first-item">
                    <a class="nav-link " href="{{ asset('carte')}}">Nos Cartes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ asset('reservation')}}">Réservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('galerie')}}">Galerie Photo</a>
                </li>
                <li class="nav-item logo">
                    <a  href="/">
                        <img src="/image/logo2.png" alt="logo"  width="130" height="60">
                    </a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('evenement')}}">Evénements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('contact')}}">Contact</a>
                <li class="nav-item logo-item">
                   
                    {{-- LOGO FB ET INSTA DE LA NAVBAR --}}

                    <a href="https://www.instagram.com/bayla_restaurant/?hl=fr">
                        <box-icon name='instagram' color="white" type='logo' animation='tada-hover'>
                        </box-icon>
                    </a>
                    <a href="https://www.facebook.com/baylarestaurant">
                        <box-icon name='facebook' color='white' type='logo' animation='tada-hover'>
                        </box-icon>
                    </a>
                </li>
            </ul>
        </div>

</nav>
</div>


@yield('content')
<script src="/js/carte.js"></script>
<script src="/js/edit.js"></script>
@extends('footer')
