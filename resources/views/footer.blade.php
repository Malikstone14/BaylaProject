{{-- FOOTER DU LAYOUT --}}

<footer>

    {{-- PARTIE CONTACT DU FOOTER --}}
    <div class="row">
        <div id="footer-contact" class="block-foot col-md-12 col-lg-4 col-xl-4 col-xs-12 col-ms-12">

            <p>Bayla Restaurant <br>
                47 Rue Écuyère, 14000 Caen <br>
                02.31.91.20.83 <br>
                <a href="reservation">Réservation</a>
            </p>
        </div>

        {{-- LOGO CENTRAL DU LAYOUT AVEC LOGO FB ET INSTA --}}

        <div class="block-foot col-md-12 col-lg-4 col-xl-4 col-xs-12 col-ms-12">

            <img src="/image/logo2.png" alt="logoB" style="padding-bottom: 3%" width="300" height="100"><br>
            <a href="https://www.facebook.com/baylarestaurant">
                <box-icon name='facebook-circle' color='white' type='logo' animation='tada-hover'></box-icon>
            </a>
            <a href="https://www.instagram.com/bayla_restaurant/?hl=fr">
                <box-icon name='instagram' color="white" type='logo' animation='tada-hover'></box-icon>
            </a>

        </div>

        {{-- PARTIE DEDIEE A LA CONNEXION ADMIN --}}

        <div class="block-foot col-md-12 col-lg-4 col-xl-4 col-xs-12 col-ms-12">

            @guest
                <a href="login">Connexion</a>
            @endguest
            @auth

                {{ Auth::user()->email }}
                <br>
                <a href="{{ asset('user') }}">Gerer les Utilisateurs</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <br>
                    <button type="submit" class="btn btn-outline-danger">Déconnexion</button>
                </form>
            @endauth


        </div>
    </div>
</footer>

</html>
