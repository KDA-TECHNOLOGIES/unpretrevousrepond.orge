@extends('layouts.app')
@section('content')
    <section class="slice slice-lg py-7 bg-cover bg-size--cover" style="background-image: url(../../assets/img/backgrounds/img-5.jpg);">
        <span class="mask bg-dark opacity-8"></span>
        <div class="container d-flex align-items-center" data-offset-top="#navbar-main">
            <div class="col py-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 col-lg-7 text-center">
                        <h1 class="display-4 text-white mb-2"><strong>FOIRE</strong> AUX QUESTIONS</h1>
                        <span class="text-white text-sm">Retrouvez les questions plus posées.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg" id="sct-faq">
        <div class="container">
            <div class="row row-grid">
                <div class="col-lg-3">
                    <!-- Side menu -->
                    <div data-toggle="sticky" data-sticky-offset="50">
                        <div class="card">
                            <div class="list-group list-group-flush">
                                <a href="#theme-integration" data-scroll-to data-scroll-to-offset="50" class="list-group-item list-group-item-action d-flex justify-content-between">
                                    <div>
                                        <i data-feather="layout" class="mr-2"></i>
                                        <span>Renseignements généraux</span>
                                    </div>
                                    <div>
                                        <i data-feather="chevron-right"></i>
                                    </div>
                                </a>
                                <a href="#customization" data-scroll-to data-scroll-to-offset="50" class="list-group-item list-group-item-action d-flex justify-content-between">
                                    <div>
                                        <i data-feather="sliders" class="mr-2"></i>
                                        <span>Comment ça marche</span>
                                    </div>
                                    <div>
                                        <i data-feather="chevron-right"></i>
                                    </div>
                                </a>
                                <a href="#fonts-and-colors" data-scroll-to data-scroll-to-offset="50" class="list-group-item list-group-item-action d-flex justify-content-between">
                                    <div>
                                        <i data-feather="edit-3" class="mr-2"></i>
                                        <span>Divers</span>
                                    </div>
                                    <div>
                                        <i data-feather="chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ml-lg-auto">
                    <!-- Theme integration -->
                    <div class="mb-5">
                        <h4 class="mb-4" id="theme-integration">Renseignements généraux</h4>
                        <!-- Accordion -->
                        <div id="accordion-1" class="accordion accordion-spaced">
                            <!-- Accordion card 1 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-1" data-toggle="collapse" role="button" data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                    <h6 class="mb-0">Qu'est-ce que <strong>&laquo; Un prêtre vous répond &raquo;</strong> ?</h6>
                                </div>
                                <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            <strong>&laquo; Un prêtre vous répond &raquo;</strong> est une plate-forme où des prêtres catholiques se disposent à répondre,
                                            avec clarté, à aux questions que tu te poses ou qu’on te pose sur ta foi chrétienne.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 2 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-2" data-toggle="collapse" role="button" data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                    <h6 class="mb-0">A qui est destiné ce site ?</h6>
                                </div>
                                <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            A tous les catholiques et aux personnes qui veulent en avoir le cœur net sur la foi catholique.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 3 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-3" data-toggle="collapse" role="button" data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                    <h6 class="mb-0">Qui répond à mes questions ?</h6>
                                </div>
                                <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            Les prêtres de l’Eglise catholique prioritairement.
                                            Ils sont entourés d’une équipe de personnes qualifiées
                                            en connaissance religieuse et dont les réponses sont
                                            acceptées, sous le regard vigilant des prêtres.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Customization  -->
                    <div class="mb-md">
                        <h4 class="mb-4" id="customization">Comment ça marche</h4>
                        <!-- Accordion -->
                        <div id="accordion-2" class="accordion accordion-spaced">
                            <!-- Accordion card 1 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-1" data-toggle="collapse" role="button" data-target="#collapse-2-1" aria-expanded="false" aria-controls="collapse-2-1">
                                    <h6 class="mb-0"><i data-feather="file" class="mr-3"></i>Which license do I need?</h6>
                                </div>
                                <div id="collapse-2-1" class="collapse" aria-labelledby="heading-2-1" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 2 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-2" data-toggle="collapse" role="button" data-target="#collapse-2-2" aria-expanded="false" aria-controls="collapse-2-2">
                                    <h6 class="mb-0"><i data-feather="unlock" class="mr-3"></i>How do I get access to a theme?</h6>
                                </div>
                                <div id="collapse-2-2" class="collapse" aria-labelledby="heading-2-2" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 3 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-3" data-toggle="collapse" role="button" data-target="#collapse-2-3" aria-expanded="false" aria-controls="collapse-2-3">
                                    <h6 class="mb-0"><i data-feather="folder" class="mr-3"></i>How do I see previous orders?</h6>
                                </div>
                                <div id="collapse-2-3" class="collapse" aria-labelledby="heading-2-3" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Fonts and colors -->
                    <div class="mb-md">
                        <h4 class="mb-4" id="fonts-and-colors">Divers</h4>
                        <!-- Accordion -->
                        <div id="accordion-3" class="accordion accordion-spaced">
                            <!-- Accordion card 1 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-3-1" data-toggle="collapse" role="button" data-target="#collapse-3-1" aria-expanded="false" aria-controls="collapse-3-1">
                                    <h6 class="mb-0"><i data-feather="file" class="mr-3"></i>Which license do I need?</h6>
                                </div>
                                <div id="collapse-3-1" class="collapse" aria-labelledby="heading-3-1" data-parent="#accordion-3">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 2 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-3-2" data-toggle="collapse" role="button" data-target="#collapse-3-2" aria-expanded="false" aria-controls="collapse-3-2">
                                    <h6 class="mb-0"><i data-feather="unlock" class="mr-3"></i>How do I get access to a theme?</h6>
                                </div>
                                <div id="collapse-3-2" class="collapse" aria-labelledby="heading-3-2" data-parent="#accordion-3">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 3 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-3-3" data-toggle="collapse" role="button" data-target="#collapse-3-3" aria-expanded="false" aria-controls="collapse-3-3">
                                    <h6 class="mb-0"><i data-feather="folder" class="mr-3"></i>How do I see previous orders?</h6>
                                </div>
                                <div id="collapse-3-3" class="collapse" aria-labelledby="heading-3-3" data-parent="#accordion-3">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
