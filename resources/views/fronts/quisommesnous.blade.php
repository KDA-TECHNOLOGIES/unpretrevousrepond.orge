@extends('layouts.app')
@section('content')
    <section class="slice py-8 bg-dark bg-cover bg-size--cover" style="background-image: url({{asset('assets/img/backgrounds/img-1.jpg')}});">
        <!-- Mask -->
        <span class="mask bg-gradient-dark opacity-9"></span>
        <!-- Container -->
        <div class="container d-flex align-items-center text-center text-lg-left pt-5 pb-5 pt-lg-6">
            <div class="col px-0">
                <div class="row row-grid align-items-center">
                    <div class="col-lg-12 text-center text-lg-left">
                        <!-- Heading -->
                        <h3 class="text-white mb-4">
                            Un prêtre vous répond.
                        </h3>
                        <!-- Text -->
                        <div class="lead text-white opacity-8">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 col-lg-6 order-md-2 mb-5 mb-md-0 mt-5">
                                    <!-- Card -->
                                    <div class="card border-0 shadow-lg zindex-100 mb-0">
                                        <figure>
                                            <img alt="Image placeholder" src="../../assets/img/theme/light/img-1-1000x800.jpg" class="card-img">
                                        </figure>
                                        <div class="card-img-overlay d-flex justify-content-end">
                                            <div class="text-center">
                                                <a href="https://www.youtube.com/watch?v=zodT9bCdIiI" class="btn btn-white btn-icon-only rounded-circle shadow-sm hover-scale-110" data-fancybox="">
                                                <span class="btn-inner--icon text-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play text-primary"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                                                </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Decoration -->
                                    <div class="w-75 position-absolute bottom-n5 right-n5 rotate-180">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 463.6 616" style="enable-background:new 0 0 463.6 616;" xml:space="preserve" class="injected-svg svg-inject fill-secondary">
                                            <path d="M148.4,608.3C25.7,572.5-3.5,442.2,0.3,375.8s24.8-117,124.8-166.5s125.7-77.4,165-129.6 c43.2-57.4,96.5-94.4,127.9-73c63,43,53.9,280,14,358s-68.9,75.5-98.9,118.7S271,644,148.4,608.3z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 order-md-1 pr-md-5">
                                    <strong>Une communauté catholique pour:</strong>
                                    <ul>
                                        <li>partager notre soif</li>
                                        <li>mieux connaitre notre foi</li>
                                        <li>mieux vivre notre charité</li>
                                        <li>mieux tendre vers la sainteté</li>
                                        <li>mieux affronter les multiples questions quotidiennes</li>
                                    </ul>
                                    avec l'assistance des prêtres et formateurs catholiques.
                                    <p><strong>Fiers d'être chrétiens</strong></p>
                                    <p>
                                        <a href="{{route('front.contact')}}" class="btn btn-primary btn-lg btn-icon">
                                        <span class="btn-inner--icon">
                                            <i data-feather="edit-3"></i>
                                        </span>
                                            <span class="btn-inner--text">Contatez-nous.</span>
                                        </a>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <!-- Buttons -->
                        <div class="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG separator -->

    </section>
    <section class="slice slice-lg">
        <div class="container">

            <div class="row mt-3">
                <div class="col-lg-6 mt-1 pr-lg-5">
                    <h1 class="badge badge-primary badge-pill" style="font-size: x-large">NOTRE VISION</h1>
                    <p class="h5 lh-180 mb-3 mt-3">
                        Elle est unique  avec une seule finalité : éclairer les chrétiens en général
                        et catholiques en particulier sur les questions de foi et de pratiques
                        chrétiennes et de les établir fermement dans leur communauté.
                        Qu'ils sachent qu'ils ne trompent pas de Dieu ni d'Eglise.
                        Nous sommes promoteurs de la fierté catholique malgré les difficultés du monde.
                        Notre joie, partager notre foi. Notre espoir, rassurer dans le Christ.
                    </p>
                </div>
                <div class="col-lg-6 " >
                    <h1 class="badge badge-primary badge-pill" style="font-size: x-large">Témoignages</h1>
                    <div class="row mt-3" style="background-color: #0e0b2b;">
                        <div class="col-lg-12 p-5">
                            <div class="bg-white p-1" style="border-radius: 5px">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="10000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="costom-caption p-2">
                                                <p>
                                                    Je salue la disponibilité des prêtres qui répondent avec plaisir aux inquiétudes des membres.
                                                    Ce groupe est vraiment différent des autres. Le maximum de discipline y règne.
                                                    D'ailleurs je ne cesse de parler du groupe sur les réseaux sociaux et à l'église.
                                                </p>
                                                <div class="col-auto text-center ">
                                                    <img alt="Image placeholder" src="{{asset('assets/img/theme/temoignages/edith.jpeg')}}" class="avatar  rounded-circle">
                                                    <a href="#" class="d-block text-xs mt-1 stretched-link text-muted">DANDJINOU Dossi Edith</a><br>
                                                    Bénin
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="costom-caption p-2">
                                                <p>
                                                    Grâce à &laquo; Un prêtre vous répond &raquo;, chacun de nous entre en dialogue avec un prêtre et
                                                    discute avec lui pour des réponses efficientes et satisfaisantes.
                                                    Merci Seigneur pour cette plate-forme qui nous rend d'énormes services.
                                                </p>
                                                <div class="col-auto text-center ">
                                                    <img alt="Image placeholder" src="../../assets/img/theme/light/person-2.jpg" class="avatar  rounded-circle">
                                                    <a href="#" class="d-block text-xs mt-1 stretched-link text-muted">Ambroise DANSOU</a><br>
                                                    RDC
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="costom-caption p-2">
                                                <p>
                                                    Il y a deux mois, j'étais sur facebook lorsque je tombe sur ce groupe. Je lance une demande d'adhésion, et aussitôt, on me répond.
                                                    Je deviens alors membre d'un groupe éducatif à caractère pédagogique.
                                                    Les enseignements sur le mariage catholique vont me marquer au plus haut point.
                                                    Que Dieu bénisse l'initiateur de ce groupe école.
                                                </p>
                                                <div class="col-auto text-center ">
                                                    <img alt="Image placeholder" src="{{asset('assets/img/theme/temoignages/guy_elongo.jpg')}}" class="avatar  rounded-circle">
                                                    <a href="#" class="d-block text-xs mt-1 stretched-link text-muted">Guy ELONGO.</a>
                                                    <br>
                                                    Kinshasa/RDC
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-6">
                    <img src="{{asset('assets/img/theme/light/qsn-speciment1.jpg')}}" alt="Image" class="rounded-lg img-fluid" />
                    <div class="text-right mt-4">
                        <img src="{{asset('assets/img/theme/light/coeur-im-marie.jpg')}}" alt="Image" class="rounded-lg img-fluid w-50" />
                    </div>
                </div>
                <div class="col-lg-7 col-6">
                    <img src="{{asset('assets/img/theme/light/qsn-speciment2.jpg')}}" alt="Image" class="rounded-lg img-fluid w-75" />
                    <div class="text-right mt-4">
                        <img src="{{asset('assets/img/theme/light/img-2-1000x800.jpg')}}" alt="Image" class="rounded-lg img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice py-5 py-md-6 bg-section-secondary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h2 class="mb-3">
                        NOTRE COMMUNAUTE
                    </h2>
                </div>
            </div>
            <div class="row align-items-center" style="margin-top: 5em">
                <div class="col-lg-5">
                    <h5 class="h5 lh-180  mb-5 text-justify">
                        Nous sommes une famille de chrétiens réunis pour avoir des réponses claires et
                        simples aux multiples questions qui se posent à nous aujourd’hui. Nous avons
                        la chance d’avoir avec nous des prêtres catholiques de différents horizons,
                        disponibles par surcroît, pour répondre à toutes nos questions, vraiment toutes.
                        Quelle merveille ! Plus que cela, avons des formations à des coûts qui défient toute imagination.
                        La cerise sur le gâteau est la possibilité de prendre un rendez-vous et échanger directement
                        avec un prêtre. Ici, on va de découvertes en découvertes.  Nous nous épanouissons vraiment ici,
                        dans une ambiance parfois bon enfant, comme sur les réseaux sociaux. Nous sommes une famille, solidaire et heureuse.
                        <br>
                        <div style="text-align: right"> <a href="{{route('front.quisommesnous')}}" class="btn btn-primary text-white">Je m'inscris <i class="fa fa-arrow-alt-circle-right"></i> </a></div>
                    </h5>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card bg-dark shadow-lg rounded-lg border-0">
                                <div class="p-4">
                                    <h3 class="mb-0 text-white">
                                        <span class="counter" data-from="0" data-to="10" data-speed="1000" data-refresh-interval="4"></span>
                                        <span class="counter-extra">k</span>
                                    </h3>
                                    <p class="text-sm text-white mb-0">
                                        Membres
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card bg-dark shadow-lg rounded-lg border-0">
                                <div class="p-4">
                                    <h3 class="mb-0 text-white">
                                        <span class="counter" data-from="0" data-to="20" data-speed="2000" data-refresh-interval="4"></span>
                                        <span class="counter-extra">k</span>
                                    </h3>
                                    <p class="text-sm text-white mb-0">
                                        Questions
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card bg-dark shadow-lg rounded-lg border-0">
                                <div class="p-4">
                                    <h3 class="mb-0 text-white">
                                        <span class="counter" data-from="0" data-to="40" data-speed="3000" data-refresh-interval="4"></span>
                                        <span class="counter-extra">k</span>
                                    </h3>
                                    <p class="text-sm text-white mb-0">
                                        Réponses
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ml-lg-auto">
                    <div class="card border-0 shadow-lg zindex-100" style="margin-top: -6em">
                        <figure>
                            <img alt="Image placeholder" src="assets/img/theme/light/communaute-speciment.jpg" class="card-img">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="slice slice-lg pb-5">
        <div class="container">
            <!-- Section title -->
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-8 col-md-10">
                    <h2 class=" mt-4">NOTRE EQUIPE</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="{{asset('assets/img/theme/teams/team-pere-jean.jpg')}}">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">Abbé Jean <strong>OUSSOU-KICHO</strong></h5>
                            <p class="text-muted text-sm mb-0">Animateur principal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="{{asset('assets/img/theme/teams/team-arnauld.jpg')}}">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">Arnauld D. <strong>KANHONOU</strong></h5>
                            <p class="text-muted text-sm mb-0">Back-End and Fron-End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="{{asset('assets/img/theme/teams/team-horace.jpg')}}">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">Horace <strong>OGOU</strong></h5>
                            <p class="text-muted text-sm mb-0">Formateur</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets/img/theme/light/person-4.jpg">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">Père Marie Joseph <strong></strong></h5>
                            <p class="text-muted text-sm mb-0">Rédacteur.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('script')

@endsection
