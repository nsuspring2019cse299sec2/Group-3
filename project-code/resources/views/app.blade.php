<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Job Market') }}</title>

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet'
        type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="{{asset('css/creative.min.css')}}" rel="stylesheet">
    <style>
        .list-group-item, .card{
            border: 1px solid rgb(255, 255, 255);
        }
        .badge {
            padding: 0.5em 1em !important;
        }
    </style>
    <link rel="manifest" href="manifest.webmanifest">
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <form class="form-inline ml-auto">
                    <input class="form-control mr-sm-2" style="border-color: #fff;" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/jobs">Explore Jobs</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/register">Sign up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/login">Login</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/logout">Logout</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <section class="page-section bg-primary" id="jobs">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    @yield('content-summary')
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    @yield('content')
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                This is advertisement body.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright &copy; 2019 - Start Bootstrap</div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}" defer></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}" defer></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}" defer></script>
    <script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}" defer></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/creative.min.js')}}" defer></script>
    <script src="{{asset('js/index.js')}}" defer></script>
</body>

</html>
