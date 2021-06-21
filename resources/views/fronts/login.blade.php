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
                    <span class="badge badge-warning badge-pill">Bienvenue</span>
                    <h5 class="h5 text-white mt-3">Dieu vous accueille dans sa maison.</h5>
                    <p class="text-white opacity-8">
                        Toutes vos préoccupations sont bienvenues.
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex flex-column">
            <div class="row align-items-center justify-content-center justify-content-lg-end min-vh-100">
                <div class="col-sm-7 col-lg-6 col-xl-6 py-6 py-md-0">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-10 col-xl-6">
                            <div>
                                <div class="mb-1 text-center">
                                    <img alt="Image placeholder" src="{{asset('assets/img/brand/logo-upvr.jpg')}}" id="navbar-logo" width="80px" height="80px" style="border-radius:5px">
                                    <h6 class="h3 mb-1 text-center">Bienvenue</h6>
                                    <p class="text-muted mb-0 text-center">Connectez-vous à votre compte pour continuer.</p>
                                </div>
                                <span class="clearfix"></span>
                                <form>
                                    <div class="form-group">
                                        <label class="form-control-label">Email address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="user"></i></span>
                                            </div>
                                            <input type="email" class="form-control" id="input-email" placeholder="nom@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <label class="form-control-label">Mot de passe</label>
                                            </div>
                                            <div class="mb-2">
                                                <a href="#" class="small text-muted  border-primary" data-toggle="password-text" data-target="#input-password"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="key"></i></span>
                                            </div>
                                            <input type="password" class="form-control" id="input-password" placeholder="Mot de passe">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="button" class="btn btn-block btn-primary">Connexion</button>
                                    </div>
                                </form>
                                <div class="py-1 text-center">
                                    <span class="text-xs text-uppercase">ou</span>
                                </div>
                                <!-- Alternative login -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="#" class="btn btn-block btn-neutral btn-icon mb-3 mb-sm-0">
                                            <span class="btn-inner--icon"><img src="{{asset('assets/img/svg/social/facebook.svg')}}" alt="Image placeholder"></span>
                                            <span class="btn-inner--text">Facebook</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#" class="btn btn-block btn-neutral btn-icon">
                                            <span class="btn-inner--icon"><img src="{{asset('assets/img/icons/brands/google.svg')}}" alt="Image placeholder"></span>
                                            <span class="btn-inner--text">Google</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Links -->
                                <div class="mt-4"><small>Je n'ai pas de compte</small>
                                    <a href="{{route('front.inscription')}}" class="small font-weight-bold">Je crée mon compte</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
