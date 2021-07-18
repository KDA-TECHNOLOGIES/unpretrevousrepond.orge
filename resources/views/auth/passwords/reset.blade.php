@extends('layouts.app-password-recover')

@section('content')
    <div class="bg-primary position-absolute h-110 top-0 left-0 zindex-100 col-lg-6 col-xl-6 zindex-100 d-none d-lg-flex flex-column justify-content-end" data-bg-size="cover" data-bg-position="center">
        <!-- Cover image -->
        <img src="{{asset('assets/img/theme/light/img-v-2.jpg')}}" alt="Image" class="img-as-bg">
        <!-- Overlay text -->
        <div class="row position-relative zindex-110 p-5">
            <div class="col-md-8 text-center mx-auto">
                <span class="badge badge-warning badge-pill">News</span>
                <h5 class="h5 text-white mt-3">The all new Quick is here</h5>
                <p class="text-white opacity-8">
                    Everything you need to create amazing websites at scale.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex flex-column">
        <div class="row align-items-center justify-content-center justify-content-lg-end min-vh-100">
            <div class="col-sm-7 col-lg-6 col-xl-6 py-6 py-lg-0">
                <div class="row justify-content-center">
                    <div class="col-11 col-lg-10 col-xl-6">
                        <div>
                            <div class="mb-1 text-center">
                                <img alt="Image placeholder" src="{{asset('assets/img/brand/logo3.png')}}" id="navbar-logo" width="110px" height="110px" style="border-radius:5px">
                                <h6 class="h5 mb-2">Réinitialiser votre mot de passe</h6>
                            </div>

                            @error('email')
                            <div class="alert alert-danger" role="alert">
                                <i class="fa fa-times-circle"></i> Désolé! Aucun compte n'est associé à cette adresse ou le lien
                                de renitialisation à expirer
                            </div>
                            @enderror
                            <form method="POST" action="{{ route('password.update') }}" id="valider">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group">
                                    <label class="form-control-label">Votre adresse Email</label>
                                    <div class="input-group input-group-merge">
                                        <input type="email" class="form-control form-control-prepend" id="email" name="email" placeholder="nom@example.com" value="{{ $email ?? old('email') }}" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="at-sign"></i></span>
                                        </div>
                                    </div>
                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Mot de passe</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" class="form-control form-control-prepend" id="password" name="password" value="" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="key"></i></span>
                                        </div>
                                    </div>
                                    @error('password')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Confirmer</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" class="form-control form-control-prepend" id="password_confirmation" name="password_confirmation"   required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="key"></i></span>
                                        </div>
                                    </div>
                                    @error('password_confirmation')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mt-1">
                                    <button id="btn-validate" type="submit" class="btn btn-block btn-primary">Réinitialiser</button>
                                </div>
                            </form>
                            <!-- Links -->
                            <div class="mt-4 text-center">
                                <a href="{{route('front.connexion')}}" class="small font-weight-bold">Je me connecte</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $("#valider").submit(function (){
            $("#btn-validate").attr('disabled',true);
            $("#btn-validate").html('<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>')
        })
    </script>
@endsection



