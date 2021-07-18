<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <title>Quick – Website UI Kit</title>
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
            transition: opacity .5s ease;
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
    </style>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/brand/logo3.jpg')}}" type="image/png"><!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/libs/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <!-- Quick CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/quick-website.css')}}" id="stylesheet">
    @yield('style')
</head>

<body>
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
@yield('content')
<!-- Core JS  -->
<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/svg-injector/dist/svg-injector.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/dist/feather.min.js')}}"></script>
<!-- <script src="../../assets/libs/jquery.scrollbar/jquery.scrollbar.min.js"></script> -->
<!-- <script src="../../assets/libs/simplebar/dist/simplebar.min.js"></script> -->
<!-- Optional JS -->
<script src="{{asset('assets/libs/in-view/dist/in-view.min.js')}}"></script>
<script src="{{asset('assets/libs/sticky-kit/dist/sticky-kit.min.js')}}"></script>
<script src="{{asset('assets/libs/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<!-- Quick JS -->
<script src="{{asset('assets/js/quick-website.js')}}"></script>
@yield('script')
<!-- Feather Icons -->
<script>
    feather.replace({
        'width': '1em',
        'height': '1em'
    })
</script>
</body>

</html>
