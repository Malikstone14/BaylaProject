@extends('layout')


@section('content')

        <div class="index-top">
          <h1 class='index-titre'>Nos Cartes</h1>
        </div>
            <div class="conteudo-general js-conteudo-general">
              <div class="content-interne-general">
                <div class="content">
                  <div class="content-sem-rolagem">
                    <div class="content-interne">
                      <div class="content-image"></div>
                      <div class="content-visual-inicial">
                        <h2 class="content-titulo"><i class='bx bxs-dish bx-lg bx-border-circle'></i></h2>
                      </div>
                      <div class="content-content scroller">
                        <div class="content-text">
                          <div>   
                             @auth
                            <a href="cartemidi">
                                <box-icon class='btn-edit-carte' name='edit' class='edit-carrousel' color='white' type='solid' animation='tada'>
                                </box-icon>
                            </a>
                            @endauth
                            </div>
                            <h1>Carte du Midi</h1>
                            <h3>Entrée</h3>
                            <hr class="separator-carte">
                            @foreach ($cartemidientree as $entree)
                           
                            <p class='cartetitre'>{{$entree->nom}}</p>
                            <p class='carteingredient'>{{$entree->ingredient}}</p>
                            @endforeach
                            <hr class="separator-carte">
                            <h3>Plat</h3>
                            <hr class="separator-carte">
                            @foreach ($cartemidiplat as $plat)

                            <p class='cartetitre'>{{$plat->nom}}</p>
                            <p class='carteingredient'>{{$plat->ingredient}}</p>

                            @endforeach
                            <hr class="separator-carte">
                            <h3>Dessert</h3>
                            <hr class="separator-carte">
                            @foreach ($cartemididessert as $dessert)
                           
                            <p class='cartetitre'>{{$dessert->nom}}</p>
                            <p class='carteingredient'>{{$dessert->ingredient}}</p>
                            @endforeach 
                            <p class=carteprix>Entrée ou Plat - Dessert 14,50€</p>
                            <p class="carteprix">Entrée - Plat - Dessert 18,50€</p>
                            <p class="carteprix">Expresso 1€</p>
                        </div>
                        <div class="content-botao-fechar"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="content-sem-rolagem">
                    <div class="content-interne">
                      <div class="content-image"></div>
                      <div class="content-visual-inicial">
                        <h2 class="content-titulo"><i class='bx bx-wine bx-lg bx-border-circle'></i></h2>
                      </div>
                      <div class="content-content">
                        <div class="content-text">Carte des Vins</div>
                        <div class="content-botao-fechar"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="content-sem-rolagem">
                    <div class="content-interne">
                      <div class="content-image"></div>
                      <div class="content-visual-inicial">
                        <h2 class="content-titulo"><i class='bx bx-drink bx-lg bx-border-circle'></i></h2>
                      </div>
                      <div class="content-content scroller">
                        <div class="content-text">
                          <div>   
                             @auth
                            <a id="edit-alcool" href="cartealcool">
                                <box-icon class='btn-edit-carte' name='edit' class='edit-carrousel' color='white' type='solid' animation='tada'>
                                </box-icon>
                            </a>
                            @endauth
                           </div>
                           <h1>Cocktails & Alcools</h1>
                           <div class='choixcarte'>
                              <button class='noselect' id="signature">Signature</button>
                              <button class='noselect' id="biere">Biere</button>
                              <button class='noselect' id="spiritueux">Spiritueux</button>
                              <button class='noselect' id="gin">Gin</button>
                              <button class='noselect' id="champagne">Champagne</button>
                           </div>
                           <div id="cartesignature">
                              @foreach ($cartesignature as $signature)
                                <div class="lignecarte">
                                  <div class="intitule">
                                    <p class="cartetitre">{{$signature->nom}}</p>
                                    <p class="carteingredient">{{$signature->ingredient}}</p>
                                  </div>
                                  <div>
                                    <p class="prix">{{$signature->prix}}</p>
                                  </div>
                                </div>
                            @endforeach
                          </div>
                        <div id="cartebiere">
                          <div class="pression">
                            <h4>Pressions</h4>
                            <div class="quantite">
                              <p>25cl</p>
                              <p>50cl</p>
                            </div>
                              @foreach ($cartebierepress as $pression)
                                <div class="lignecarte">
                                  <div class="intitule">
                                    <p class="cartetitre">{{$pression->nom}}</p>
                                    <p class="carteingredient">{{$pression->ingredient}}</p>
                                  </div>
                                  <div class="prix">

                                    <p class="prix">{{$pression->prix}}</p>

                                    <p class="prix">{{$pression->prix2}}</p>
                                  </div>
                                </div>
                          @endforeach
                          </div>
                        <div class='separation'></div>
                          <div class="bouteille">
                            <h4 class='titrebouteille'>Bouteilles</h4>
                            <div class="quantite" style="visibility:hidden">
                              <p>25cl</p>
                              <p>50cl</p>
                            </div>
                            @foreach ($cartebierebout as $bouteille)
                                <div class="lignecarte">
                                  <div class="intitule">
                                    <p class="cartetitre">{{$bouteille->nom}} {{$bouteille->cl}}CL</p>
                                  </div>
                                  <p class="prix biere">{{$bouteille->prix}}</p>
                                  </div>
                            @endforeach
                          </div>
                        </div>
                          <div id="cartespiritueux">
                              @foreach ($cartespiritueux as $spriritueux)
                                <div class="lignecarte">
                                  <div class="intitule">
                                    <p class="cartetitre">{{$spriritueux->nom}}</p>
                                    <p class="carteingredient">{{$spriritueux->ingredient}}</p>
                                  </div>
                                  <div>
                                    <p class="prix">{{$spriritueux->prix}}</p>
                                  </div>
                                </div>
                            @endforeach
                          </div>
                          <div id="cartegin">
                            @foreach ($cartegin as $gin)
                              <div class="lignecarte">
                                <div class="intitule">
                                  <p class="cartetitre">{{$gin->nom}}</p>
                                  <p class="carteingredient">{{$gin->ingredient}}</p>
                                </div>
                                <div>
                                  <p class="prix">{{$gin->prix}}</p>
                                </div>
                              </div>
                          @endforeach
                          </div>
                          <div id="cartechampagne">
                            @foreach ($cartechampagne as $champagne)
                              <div class="lignecarte">
                                <div class="intitule">
                                  <p class="cartetitre">{{$champagne->nom}}</p>
                                  <p class="carteingredient">{{$champagne->ingredient}}</p>
                                </div>
                                <div>
                                  <p class="prix">{{$champagne->prix}}</p>
                                </div>
                              </div>
                          @endforeach
                          </div>
                        </div>
                        <div class="content-botao-fechar"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="content-sem-rolagem">
                    <div class="content-interne">
                      <div class="content-image"></div>
                      <div class="content-visual-inicial">
                        <h2 class="content-titulo"><i class='bx bx-cheese bx-lg bx-border-circle'></i></h2>
                      </div>
                      <div class="content-content scroller">
                        <div class="content-text">
                          <div>   
                            @auth
                           <a href="carteapero">
                               <box-icon class='btn-edit-carte' name='edit' class='edit-carrousel' color='white' type='solid' animation='tada'>
                               </box-icon>
                           </a>
                         @endauth
                         </div>
                          <h1>Carte des Tapas</h1>
                          <br>
                          @foreach ($carteapero as $tapas)
                          <div class='lignecarte'>
                            <div class="intitule">
                              <p class="cartetitre">{{$tapas->nom}}</p>
                              <p class="carteingredient">{{$tapas->ingredient}}</p>
                            </div>
                            <div>
                              <p class="prix">{{$tapas->prix}}€</p>
                            </div>
                          </div>
                          @endforeach
                        </div>
                        <div class="content-botao-fechar"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="content-sem-rolagem">
                    <div class="content-interne">
                      <div class="content-image"></div>
                      <div class="content-visual-inicial">
                        <h2 class="content-titulo"><i class='bx bx-drink bx-lg bx-border-circle'></i></h2>
                      </div>
                      <div class="content-content scroller">
                        <div class="content-text">
                          <div>   
                             @auth
                            <a id="edit-alcool" href="carteboisson">
                                <box-icon class='btn-edit-carte' name='edit' class='edit-carrousel' color='white' type='solid' animation='tada'>
                                </box-icon>
                            </a>
                            @endauth
                           </div>
                           <h1>Boissons</h1>
                           <div class='choixcarte'>
                              <button class='noselect' id="fraiche">Fraiches</button>
                              <button class='noselect' id="chaude">Chaudes</button>
                           </div>
                           <div id="carteboissonfraiche">
                              @foreach ($carteboissonfraiche as $fraiche)
                                <div class="lignecarte">
                                  <div class="intitule">
                                    <p class="cartetitre">{{$fraiche->nom}}</p>
                                    <p class="carteingredient">{{$fraiche->ingredient}}</p>
                                  </div>
                                  <div>
                                    <p class="prix">{{$fraiche->prix}}</p>
                                  </div>
                                </div>
                            @endforeach
                          </div>
                          <div id="carteboissonchaude">
                            @foreach ($carteboissonchaude as $chaude)
                              <div class="lignecarte">
                                <div class="intitule">
                                  <p class="cartetitre">{{$chaude->nom}}</p>
                                  <p class="carteingredient">{{$chaude->ingredient}}</p>
                                </div>
                                <div>
                                  <p class="prix">{{$chaude->prix}}</p>
                                </div>
                              </div>
                          @endforeach
                        </div>
                          <div class="content-botao-fechar"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <script src="/js/carte.js"></script>
          
          



    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
