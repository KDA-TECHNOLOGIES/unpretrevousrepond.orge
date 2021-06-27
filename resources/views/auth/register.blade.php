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
        <div class="bg-primary position-absolute h-110 top-0 left-0 zindex-100 col-lg-6 col-xl-6 zindex-100 d-none d-lg-flex flex-column justify-content-end" data-bg-size="cover" data-bg-position="center">
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
                                <div class=" text-center">
                                    <img alt="Image placeholder" src="{{asset('assets/img/brand/logo-upvr.jpg')}}" id="navbar-logo" width="70px" height="70px" style="border-radius:5px">
                                    <p class="text-muted mb-0">Devenez membre et rejoignez la grande communauté.</p>
                                </div>
                                <span class="clearfix"></span>
                                <form method="POST" action="{{ route('front.post.inscription') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Nom & Prénoms</label>
                                        <div class="input-group input-group-merge">
                                            <input  type="text" class="form-control form-control-prepend" id="name" name="name"  placeholder="Nom & Prénoms" value="{{old('name')}}" required autocomplete="off" autofocus>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                        </div>
                                        @error('name')
                                            <span class="text-danger" role="alert">
                                                <small>{{ $message }}</small>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Adresse email</label>
                                        <div class="input-group input-group-merge">
                                            <input type="email" class="form-control form-control-prepend" id="email" name="email" value="{{@old('email')}}" required placeholder="nom@example.com">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                            </div>

                                        </div>
                                        @error('email')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label">Mot de passe</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" class="form-control form-control-prepend" id="password" name="password" required placeholder="********">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                                            </div>
                                        </div>
                                        @error('password')
                                        <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label">Confirmer</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" class="form-control form-control-prepend" id="password-confirmation" name="password_confirmation" required placeholder="********">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                                            </div>
                                        </div>
                                        @error('password_confirmation')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="">
                                        <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" name="conditions" {{@old('conditions') ? 'checked':''}} class="custom-control-input" id="check-terms" required>
                                            <label class="custom-control-label" for="check-terms">J'accepte les <a href="../../pages/utility/terms.html">conditions et termes d'utilisation</a></label>
                                        </div>
                                        @error('conditions')
                                            <span class="text-danger mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="">
                                        <button type="submit" name="valider" class="btn btn-block btn-primary">Créer mon compte</button>
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

