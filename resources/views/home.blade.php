@extends('layout')


@section('content')
    <div id="carrousel" class="carousel slide carousel-fade" data-pause="false" data-ride="carousel">

        <!-- Carrousel -->
        @auth
            <a href="carrousel">
                <box-icon name='edit' class='edit-carrousel' color='white' type='solid' animation='tada'>
                </box-icon>
            </a>
        @endauth
        <div class="carousel-inner">

            @foreach ($carrouselActive as $key => $ongletCarrousel)
            
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-interval="4000">
                    <img src="/image/{{ $ongletCarrousel->chemin }}" alt="{{ $ongletCarrousel->chemin }}"
                        class="d-block w-100">
                    <div class="text-container carousel-caption">
                        <a href="{{ $ongletCarrousel->URL }}">
                            <h4 class="policeDancing titrecarrousel">{{ $ongletCarrousel->titre }}</h4>
                            <p>{{ $ongletCarrousel->texte }}</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    <!-- Contrôles -->
    <a class="carousel-control-prev" href="#carrousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carrousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
    </div>



    <div id="presentation">
        @auth
            <box-icon class='btn-edit' data-toggle="modal" data-target="#exampleModal" name='edit' class='edit-carrousel'
                color='black' type='solid' animation='tada'></box-icon>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <form action="{{ route('hometexte.update', $homeTexte[0]->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modifier</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Titre</label>
                                    <input type="text" name="home_titre" class="form-control"
                                        value="{{ $homeTexte[0]->home_titre }}" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Texte</label>
                                    <textarea class="form-control" name="home_texte" maxlength="500" value="{{ $homeTexte[0]->home_texte }}" id="message-text">{{ $homeTexte[0]->home_texte }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Retour</button>
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        @endauth

        <div class="grostitre">{{ $homeTexte[0]->home_titre }}</div>
        <br>
        <br>
        <h1 class="petittitre">{{ $homeTexte[0]->home_titre }}</h1>

        <p class="police">{{ $homeTexte[0]->home_texte }}
        </p>
        <hr class="separator">
    </div>

    @auth
        <a href="carrouselpresse">
            <box-icon class='btn-edit' name='edit' class='edit-carrousel' color='black' type='solid' animation='tada'>
            </box-icon>
        </a>
    @endauth
    <div id="presentation-article">

        <div class="grostitrepresse">Presse</div>
        <br>
        <br>
        <h1 class="petittitre">On parle de nous !</h1>
        <hr class="separator">
    </div>

    <div class="container-presse">

        <div id="carouselExampleControls" class="carousel presse slide" data-ride="carousel">
            <div class="carousel-inner presse">

                @foreach ($carrouselActivePresse as $key => $article)
                    @if ($key % $modulocarrousel === 0)
                        @if ($key > 0)
            </div>
        </div>
        @endif
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <div class="cards-wrapper">
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->titre }}</h5>
                        <a href="{{ $article->URL }}" class="btn btn-presse shadow">Consulter</a>
                    </div>
                    <a href="{{ $article->URL }}">
                        <img src="/image/{{ $article->chemin }}" alt="{{ $article->chemin }}" class="img-presse"></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <a class="carousel-control-prev presse" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon presse" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next presse" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon presse" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
    </div>
    </div>
    <div id="presentation-article">
        <div class="grostitreavis">Vos Avis</div>
        <br>
        <br>
        <h1 class="petittitre">Parce que votre avis compte !</h1>
        <hr class="separator">
    </div>

    <div class='widget-avis'>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-c9f4621f-a47d-4f8a-a562-3d93bd1bb1ec"></div>
    </div>
    <br>
    <br>
@endsection
