<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UPVR') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Preloader -->
    <style>
        @keyframes hidePreloader {
            0% {
                width: 100%;
                height: 100%;
            }

            100% {
                width: 0;
                height: 0;
            }
        }

        body>div.preloader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .10s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body:not(.loaded)>div.preloader {
            opacity: 1;
        }

        body:not(.loaded) {
            overflow: hidden;
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards;
        }
        .costom-caption {
            position: initial;
            color: rgba(78, 77, 77, 0.856);
            text-align: center;
            font-size: 1.1rem;
            font-style: italic;
            font-weight: bold;
            line-height: 1.8rem
        }
        .seprator {
            height: 2px;
            width: 56px;
            background-color: #034987;
            margin: 7px 0 10px 0;
        }
        .img-cap {
            font-style: normal;
            font-size: 1rem;
            margin-top: 0.5rem
        }
    </style>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/brand/logo-upvr.jpg')}}" type="image/png"><!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/libs/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <!-- Quick CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/quick-website.css')}}" id="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/libs/swiper/dist/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    @yield('style')
</head>

<body>
<div class="preloader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<div id="app">
    <!-- Preloader -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-cookies" data-backdrop="false" aria-labelledby="modal-cookies" aria-hidden="true">
        <div class="modal-dialog modal-dialog-aside left-4 right-4 bottom-4">
            <div class="modal-content bg-dark-dark">
                <div class="modal-body">
                    <!-- Text -->
                    <p class="text-sm text-white mb-3">
                        We use cookies so that our themes work for you. By using our website, you agree to our use of cookies.
                    </p>
                    <!-- Buttons -->
                    <a href="pages/utility/terms.html" class="btn btn-sm btn-white" target="_blank">Learn more</a>
                    <button type="button" class="btn btn-sm btn-primary mr-2" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Header -->
    <header class="header-transparent" id="header-main">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg navbar-dark" id="navbar-main">
            <div class="container">
                <!-- Brand -->
                <a class="" href="{{route('front.index')}}">
                    <img alt="Image placeholder" src="{{asset('assets/img/brand/logo2.jpg')}}" id="navbar-logo" width="120px" height="60px" style="border-radius:5px">
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Collapse -->
                <div class="collapse navbar-collapse navbar-collapse-overlay" id="navbar-main-collapse">
                    <!-- Toggler -->
                    <div class="position-relative">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <!-- Main navigation -->
                    <ul class="navbar-nav ml-lg-auto">
                        <!-- Overview -->
                        <li class="nav-item nav-item-spaced d-none d-lg-block">
                            <a class="nav-link {{url()->current() == route('front.index') ? 'active':''}}" href="{{route('front.index')}}">
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item nav-item-spaced d-none d-lg-block">
                            <a class="nav-link {{url()->current() == route('front.quisommesnous') ? 'active':''}}" href="{{route('front.quisommesnous')}}">
                                Qui sommes-nous ?
                            </a>
                        </li>
                        <li class="nav-item nav-item-spaced d-none d-lg-block">
                            <a class="nav-link {{url()->current() == route('front.actualites') ? 'active':''}}" href="{{route('front.actualites')}} ">
                                Actualités
                            </a>
                        </li>
                        <li class="nav-item nav-item-spaced d-none d-lg-block">
                            <a class="nav-link {{url()->current() == route('front.contact') ? 'active':''}}" href="{{route('front.contact')}}">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item nav-item-spaced d-none d-lg-block">
                            <a class="nav-link {{url()->current() == route('front.faq') ? 'active':''}}" href="{{route('front.faq')}}">
                                FAQ
                            </a>
                        </li>
                    </ul>
                    <!-- Right navigation -->
                    <ul class="navbar-nav align-items-lg-center d-none d-lg-flex ml-lg-auto">
                        <!-- Auth -->
                        @if(auth()->check())
                            <li class="nav-item">
                                <a class="nav-link {{url()->current() == route('front.inscription') ? 'active':''}}" href="{{route('front.inscription')}}">
                                    Mon compte
                                </a>
                            </li>
                            <li class="nav-item">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    Déconnexion
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link {{url()->current() == route('front.inscription') ? 'active':''}}" href="{{route('front.inscription')}}">
                                    S'inscrire
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{url()->current() == route('front.inscription') ? 'active':''}}" href="{{route('front.connexion')}}">
                                    Se connecter
                                </a>
                            </li>
                        @endif

                        <li class="nav-item">
                            <a class="nav-link" >
                                <button class="btn btn-primary"><i class="fa fa-gift"></i> Faire un don</button>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- Main content -->
        @yield('content')
    <footer class="position-relative" id="footer-main">
        <div class="footer pt-lg-7 footer-dark bg-dark">
            <!-- SVG shape -->
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
                <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <!-- Footer -->
            <div class="container pt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <h3 class="text-secondary mb-2">Un Prêtre vous répond</h3>
                                <p class="lead mb-0 text-white opacity-8">
                                    Le seul endroit pour affiner votre foi.
                                </p>
                            </div>
                            <div class="col-lg-5 text-lg-right mt-4 mt-lg-0">
                                <a href="docs/index.html" class="btn btn-white btn-icon my-2" target="_blank">
                                    <span class="btn-inner--icon">
                                        <i data-feather="book" class="text-primary"></i>
                                    </span>
                                    <span class="btn-inner--text">Je m'inscris</span>
                                </a>
                                <a href="https://themes.getbootstrap.com/product/quick-website-ui-kit-2/" class="btn btn-primary my-2 ml-0 ml-sm-3" target="_blank">
                                    Je découvre.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="divider divider-fade divider-dark my-5">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <!-- Theme's logo -->
                        <a href="{{route('front.index')}}">
                            <img alt="Image placeholder" src="{{asset('assets/img/brand/logo2.jpg')}}" id="navbar-logo" width="140px" height="80px" style="border-radius:5px">
                        </a>
                        <!-- Webpixels' mission -->
                        <p class="mt-4 text-sm opacity-8 pr-lg-4">Webpixels attempts to bring the best development experience to designers and developers by offering the tools needed for having a quick and solid start in most web projects.</p>
                        <!-- Social -->
                        <ul class="nav mt-4">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="https://dribbble.com/webpixels" target="_blank">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.instagram.com/webpxs" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Actualité</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Vie de l’Eglise </a></li>
                            <li><a href="#">Le sujet du mois</a></li>
                            <li><a href="#">Formation </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Formation</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Mariage</a></li>
                            <li><a href="#">Prière</a></li>
                            <li><a href="#">Categorie formation</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Communauté</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Un forum pour échanger </a></li>
                            <li><a href="#">Témoignage </a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="divider divider-fade divider-dark my-4">
                <div class="row align-items-center justify-content-md-between pb-4">
                    <div class="col-md-6">
                        <div class="copyright text-sm font-weight-bold text-center text-md-left">
                            &copy; 2020 UPVR All rights reserved <a href="https://webpixels.io" class="font-weight-bold" target="_blank">BY KDA TECHNOLOGIES</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Terms
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Privacy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Cookies
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Core JS  -->
<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/svg-injector/dist/svg-injector.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/dist/feather.min.js')}}"></script>
<!-- <script src="assets/libs/jquery.scrollbar/jquery.scrollbar.min.js"></script> -->
<!-- <script src="assets/libs/simplebar/dist/simplebar.min.js"></script> -->
<!-- Optional JS -->
<script src="{{asset('assets/libs/in-view/dist/in-view.min.js')}}"></script>
<script src="{{asset('assets/libs/sticky-kit/dist/sticky-kit.min.js')}}"></script>
<script src="{{asset('assets/libs/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/libs/swiper/dist/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('assets/libs/typed.js/lib/typed.min.js')}}"></script>
<!-- Quick JS -->
<script src="{{asset('assets/js/quick-website.js')}}"></script>
<!-- Feather Icons -->
<script>
    feather.replace({
        'width': '1em',
        'height': '1em'
    })
</script>
@yield('script')
</body>

</html>
