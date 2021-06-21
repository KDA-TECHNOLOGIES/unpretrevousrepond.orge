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
    <link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/png"><!-- Font Awesome -->
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
        @yield('content')
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
