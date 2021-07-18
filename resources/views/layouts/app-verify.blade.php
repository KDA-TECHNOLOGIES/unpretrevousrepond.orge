<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPVR |Validation mail. </title>

    <link rel="stylesheet" href="{{asset('comptes/css/themify-icons.css')}} ">
    <link rel="stylesheet" href="{{asset('comptes/css/feather.css')}}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/brand/logo3.png')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('comptes/css/style.css')}}">

</head>

<body class="color-theme-blue mont-font">

<div class="preloader"></div>


<div class="main-wrapper">
    <!-- main content -->
    <div class="main-content pt-0 bg-white ps-0 pe-0">
        @yield('content')
    </div>
    <!-- main content -->


    <div class="app-footer border-0 shadow-lg bg-primary-gradiant">
    </div>

    <div class="app-header-search">
        <form class="search-form">
            <div class="form-group searchbox mb-0 border-0 p-1">
                <input type="text" class="form-control border-0" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon>
                </i>
                <a href="#" class="ms-1 mt-1 d-inline-block close searchbox-close">
                    <i class="ti-close font-xs"></i>
                </a>
            </div>
        </form>
    </div>

</div>



<script src="{{asset('comptes/js/plugin.js')}}"></script>
<script src="{{asset('comptes/js/countdown.js')}}"></script>
<script src="{{asset('comptes/js/scripts.js')}}"></script>

<script>
    $(function () {

        $('.timer').countdown('2021/6/31', function(event) {
            var $this = $(this).html(event.strftime(''
                // + '<span>%w</span> weeks '
                + '<div class="time-count"><span class="text-time">%d</span> <span class="text-day">Day</span></div> '
                + '<div class="time-count"><span class="text-time">%H</span> <span class="text-day">Hours</span> </div> '
                + '<div class="time-count"><span class="text-time">%M</span> <span class="text-day">Min</span> </div> '
                + '<div class="time-count"><span class="text-time">%S</span> <span class="text-day">Sec</span> </div> '));
        });
    });
</script>

</body>

</html>
