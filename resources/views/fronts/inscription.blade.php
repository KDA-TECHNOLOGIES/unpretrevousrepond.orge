@extends('layouts.app-login')
@section('content')
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-cookies" data-backdrop="false" aria-labelledby="modal-cookies" aria-hidden="true">
        <div class="modal-dialog modal-dialog-aside left-4 right-4 bottom-4">
            <div class="modal-content bg-dark-dark">
                <div class="modal-body">
                    <!-- Text -->
                    <p class="text-sm text-white mb-3">
                        We use cookies so that our themes work for you. By using our website, you agree to our use of cookies.
                    </p>
                    <!-- Buttons -->
                    <a href="../../pages/utility/terms.html" class="btn btn-sm btn-white" target="_blank">Learn more</a>
                    <button type="button" class="btn btn-sm btn-primary mr-2" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <!-- Go back -->
    <a href="{{route('front.index')}}" class="btn btn-white btn-icon-only rounded-circle position-absolute zindex-101 left-4 top-4 d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="right" title="Go back">
        <span class="btn-inner--icon">
            <i data-feather="arrow-left"></i>
        </span>
    </a>
    <!-- Side cover login -->
    <section>
        <div class="bg-primary position-absolute h-100 top-0 left-0 zindex-100 col-lg-6 col-xl-6 zindex-100 d-none d-lg-flex flex-column justify-content-end" data-bg-size="cover" data-bg-position="center">
            <!-- Cover image -->
            <img src="{{asset('assets/img/theme/light/img-v-2.jpg')}}" alt="Image" class="img-as-bg">
            <!-- Overlay text -->
            <div class="row position-relative zindex-110 p-5">
                <div class="col-md-8 text-center mx-auto">
                    <span class="badge badge-warning badge-pill">Super!</span>
                    <h5 class="h5 text-white mt-3">Créez votre compte et intégrez la communauté  &laquo; Un prêtre vous répond &raquo;</h5>

                </div>
            </div>
        </div>
        <div class="container-fluid d-flex flex-column">
            <div class="row align-items-center justify-content-center justify-content-lg-end min-vh-100">
                <div class="col-sm-7 col-lg-6 col-xl-6 py-6 py-lg-0">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-10 col-xl-7">
                            <div>
                                <div class="mb-1 text-center">
                                    <img alt="Image placeholder" src="{{asset('assets/img/brand/logo-upvr.jpg')}}" id="navbar-logo" width="70px" height="70px" style="border-radius:5px">
                                    <h6 class="h3 ">Créer un compte</h6>
                                    <p class="text-muted mb-0">Devenez membre et rejoignez la grande communauté.</p>
                                </div>
                                <span class="clearfix"></span>
                                <form>
                                    <div class="form-group">
                                        <label class="form-control-label">Nom & Prénoms</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" class="form-control form-control-prepend" id="input-name" placeholder="Nom & Prénoms">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Adresse email</label>
                                        <div class="input-group input-group-merge">
                                            <input type="email" class="form-control form-control-prepend" id="input-email" placeholder="nom@example.com">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <label class="form-control-label">Mot de passe</label>
                                            </div>
                                            <div class="">
                                                <a href="#" class="small text-muted  border-primary" data-toggle="password-text" data-target="#input-password"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="input-group input-group-merge">
                                            <input type="password" class="form-control form-control-prepend" id="input-password" placeholder="********">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" class="custom-control-input" id="check-terms">
                                            <label class="custom-control-label" for="check-terms">J'accepte les <a href="../../pages/utility/terms.html">conditions et termes d'utilisation</a></label>
                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="button" class="btn btn-block btn-primary">Créer mon compte</button>
                                    </div>
                                </form>
                                <!-- Links -->
                                <div class=""><small>J'ai déjà un compte.</small>
                                    <a href="{{route('front.connexion')}}" class="small font-weight-bold">Connectez-vous.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
