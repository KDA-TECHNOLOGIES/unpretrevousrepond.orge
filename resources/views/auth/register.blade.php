@extends('layouts.app-login-2')

@section('content')
    <section class="section-half-rounded bg-cover bg-size--cover py-4 py-sm-0" style="background: #152c5b">
        <div class="container-fluid d-flex flex-column py-4 py-sm-0 py-lg-5 py-xl-0">
            <div class="row align-items-center min-vh-100">
                <div class="col-md-8 col-lg-6 col-xl-7 mx-auto">
                    <div class="card shadow-lg border-0 mb-0">
                        <div class="card-body  ">
                            <div>
                                <div class="mb-3 text-center">
                                    <img alt="Image placeholder" src="{{asset('assets/img/brand/logo3.jpg')}}" id="navbar-logo" width="80px" height="80px" style="border-radius:5px">
                                    <h6 class="h3 mb-1">Créer votre compte</h6>
                                    <p class="text-muted mb-0">Devenez membre &amp; rejoignez la grande communauté.</p>
                                </div>
                                <span class="clearfix"></span>
                                <form method="POST" action="{{ route('front.inscription') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Nom</label>
                                                <div class="input-group input-group-merge">
                                                    <input  type="text" class="form-control form-control-prepend" id="name" name="name"  placeholder="Nom" value="{{old('name')}}" required autocomplete="off" autofocus>
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
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Prénoms</label>
                                                <div class="input-group input-group-merge">
                                                    <input  type="text" class="form-control form-control-prepend" id="lastName" name="lastName"  placeholder="Prénoms" value="{{old('lastName')}}" required autocomplete="off" autofocus>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                    </div>
                                                </div>
                                                @error('lastName')
                                                    <span class="text-danger" role="alert">
                                                        <small>{{ $message }}</small>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Nationnalité</label>
                                                <select name="pay_id" id="" class="form-control form-control-prepend" required>
                                                    <option value="">Selectionnez</option>
                                                    <option value="">Bénin</option>
                                                </select>
                                                @error('pay_id')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Religion</label>
                                                <select name="appartence" id="" class="form-control form-control-prepend">
                                                    <option value="">Selectionnez</option>
                                                    <option value="">Bénin</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
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
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
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
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
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
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" name="conditions" {{@old('conditions') ? 'checked':''}} class="custom-control-input" id="check-terms" required>
                                            <label class="custom-control-label" for="check-terms">J'accepte les <a href="#">conditions et termes d'utilisation</a></label>
                                        </div>
                                        @error('conditions')
                                            <span class="text-danger mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mt-2 px-sm-10">
                                        <button id="btn-validate" type="submit" name="valider" class="btn btn-block btn-primary">Créer mon compte</button>
                                    </div>
                                </form>
                                <!-- Links -->
                                <div class="text-center mt-2"><small>J'ai déjà un compte.</small>
                                    <a href="{{route('front.connexion')}}" class="small font-weight-bold">Connectez-vous.</a>
                                </div>

                                <div class="py-3 text-center">
                                    <span class="text-xs text-uppercase">or</span>
                                </div>
                                <!-- Alternative login -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="#" class="btn btn-block btn-neutral btn-icon mb-3 mb-sm-0">
                                            <span class="btn-inner--icon"><img src="../../assets/img/icons/brands/github.svg" alt="Image placeholder"></span>
                                            <span class="btn-inner--text">Github</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#" class="btn btn-block btn-neutral btn-icon">
                                            <span class="btn-inner--icon"><img src="../../assets/img/icons/brands/google.svg" alt="Image placeholder"></span>
                                            <span class="btn-inner--text">Google</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Links -->
                                <div class="mt-4 text-center"><small>Already have an acocunt?</small>
                                    <a href="login-overlay.html" class="small font-weight-bold">Sign in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $("#valider").submit(function (){
            $("#btn-validate").attr('disabled',true);
            $("#btn-validate").html('<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>')
        })
    </script>
@endsection
