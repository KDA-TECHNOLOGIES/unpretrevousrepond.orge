@extends('layouts.app-verify')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 text-center default-page vh-100 align-items-center d-flex">
                <div class="card border-0 text-center d-block p-0">
                    <img src="{{asset('assets/img/brand/verify.png')}}" alt="icon" class="w200 mb-4 mt-3 ms-auto me-auto pt-md-5 d-none d-sm-block ">
                    <div class="text-grey-800 font-xs h2" style="line-height: 2em; margin-top: 2em">
                    <h3 class="fw-700 text-grey-900 mt-sm-5" style="margin-top: 3em">Bonjour {{\Illuminate\Support\Facades\Auth::user()->name}}</h3>
                        Votre inscription à &laquo; <strong>Un prêtre vous répond</strong> &raquo; a bien été prise en compte.
                        Pour la finaliser, rendez-vous dans votre boîte électronique pour la validation de votre adresse.
                        <br>
                        Si vous n'avez pas reçu de mail de validation, consultez votre spam ou cliquez sur le bouton ci-dessous et envoyez à nouveau.
                    </div>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="p-3 w175 bg-current text-white d-inline-block text-center fw-600 font-xssss rounded-3 text-uppercase ">{{ __('Reenvoyer le mail de verification.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
