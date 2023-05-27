
@extends('layouts/template')
@section('content')


   
    <section id="" class="my-5">
            <div class="container">
            @if (session('message'))
    <div class="alert alert-success" id="flash-message">
        {{ session('message') }}
    </div>
@endif
                <div class="row gy-4 align-items-center">
                    <div class="col-12 col-md-6">
                   <p>Bienvenue sur notre plateforme de gestion de ressources humaines en ligne.
  <br><br>
                    Ce site a été créé pour vous aider à gérer votre emploi de manière efficace et efficiente.
                    <br><br>
                    Que vous soyez un employé cherchant à mettre à jour vos informations personnelles ou un responsable RH gérant une équipe, 
                    <br><br>
                    notre site offre une gamme d'outils pour vous aider à atteindre vos objectifs.
                    </p> 
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="public/images/homme1.jpg" alt="qqq" width="100%">
                    </div>
                </div>

            </div>
<br><br>

    <br><br>
            <div class=" container offcanvas-body">
                                    <!-- Carousel -->
                                    <div id="carouselProject1" class="carousel slide shadow h-100"
                                         data-bs-ride="carousel" data-bs-touch="true">
                                        <div class="carousel-inner h-100">
                                            <div class="carousel-item h-100 active" data-bs-interval="10000">
                                                <img src="https://picsum.photos/1920/1080?random=1"
                                                     class="d-block w-100" alt="Image slide 1">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Slide 1</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        sollicitudin.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item h-100" data-bs-interval="2000">
                                                <img src="https://picsum.photos/1920/1080?random=2"
                                                     class="d-block w-100" alt="Image slide 2">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Slide 2</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        sollicitudin.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item h-100">
                                                <img src="https://picsum.photos/1920/1080?random=3"
                                                     class="d-block w-100" alt="Image slide 3">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Slide 3</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        sollicitudin.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselProject1" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselProject1" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
        </section>

   

    
    @endsection('content')