<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a href="#" class="navbar-brand"><img src="{{ asset('img/logo.png') }}" alt="David Guardia"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Service</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Team</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Connect</a>
                </li>
            </ul>
        </div>
    </div>
</nav>




<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('img/background.png')}}" alt="First Slide">
            <div class="carousel-caption d-md-block">
                <h1 class="display-2">Bootstrap</h1>
                <h3>Complete Website Layout</h3>
                <button type="button" class="btn btn-outline-light btn-lg">
                    VIEW DEMO
                </button>
                <button type="button" class="btn btn-primary btn-lg">Get Started</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/background2.png')}}" alt="Second Slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/background3.png')}}" alt="Third Slide">
        </div>
    </div>
</div>

<!--- Jumbotron -->
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <p class="lead">A web hosting allows individuals and organizations to make their website accessible via the world wide web</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Web Hosting</button></a>
        </div>
    </div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
    <div class="welcome row text-center">
        <div class="col-12">
            <h1 class="display-4">Build with ease</h1>
            <hr>
            <div class="col-12">
                <p class="lead">Welcome to my Bootstrap 4 website tutorial! Bootstrap is a free and open-source front-end library with HTML and CSS based designs. </p>
            </div>
        </div>
    </div>
</div>

<!--- Three Column Section -->
<div class="container-fuild padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-code"></i>
            <h3>HTML 5</h3>
            <p>Build with the latest version of HTML, HTML5.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-bold"></i>
            <h3>BOOTSTRAP</h3>
            <p>Build with the latest version of Bootstrap, Bootstrap 4.</p>
        </div>
        <div class="col-xs-12 col-md-4">
            <i class="fab fa-css3"></i>
            <h3>CSS3</h3>
            <p>Build with the latest version of CSS, CSS3.</p>
        </div>
    </div>
    <hr class="my-4">
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-lg-6">
            <h2>If you build it</h2>
            <p>The columns will automatically stack on the top of each other when the screen is less than 575px wide</p>
            <p>Resize the browser window to see the effect, Responsive website design has become more important as the traffic of mobile account for more that half of the total internet traffic</p>
            <p>It can also display the webpage differentely depending on the screen size or viewing device</p>
            <br>
            <a href="#" class="btn btn-primary">Learn more</a>
        </div>
        <div class="col-lg-6">
            <img src="{{asset('img/desk.png')}}" alt="Desk" class="img-fluid">
        </div>
    </div>
</div>
<hr class="my-4">
<!--- Fixed background -->
<figure>
    <div class="fixed-wrap">
        <div id="fixed"></div>
    </div>
</figure>

<!--- Emoji Section -->
<button class="fun" data-toggle="collapse" data-target="#emoji">click for fun</button>
<div id="emoji" class="collapse">
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-sm-6 col-md-3">
                <img src="{{asset('img/gif/panda.gif')}}" class="gif" alt="Panda">
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="{{asset('img/gif/poo.gif')}}" class="gif" alt="Poo">
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="{{asset('img/gif/unicorn.gif')}}" class="gif" alt="Unicorn">
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="{{asset('img/gif/chicken.gif')}}" class="gif" alt="Chicken">
            </div>
        </div>
    </div>
</div>

<!--- Meet the team -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h2 class="display-4">Meet the team</h2>
            <hr>
        </div>
    </div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('img/team1.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">John is an internet entrepreneur with more than 20 years of experience</p>
                    <a href="#" class="btn btn-outline-secondary">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('img/team2.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Mary Jo</h4>
                    <p class="card-text">Mary is a designer with almost 10 years of experience</p>
                    <a href="#" class="btn btn-outline-secondary">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('img/team3.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Phil Ho</h4>
                    <p class="card-text">Phil is a developer with over 5 years of web development experience</p>
                    <a href="#" class="btn btn-outline-secondary">See Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-lg-6">
            <h2>Our Philosophy</h2>
            <p>The columns will automatically stack on the top of each other when the screen is less than 575px wide</p>
            <p>Resize the browser window to see the effect, Responsive website design has become more important as the traffic of mobile account for more that half of the total internet traffic</p>
            <br>

        </div>
        <div class="col-lg-6">
            <img src="{{asset('img/bootstrap2.png')}}" alt="Bootstrap" class="img-fluid">
        </div>
    </div>
    <hr class="my-4">
</div>

<!--- Connect -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect</h2>
        </div>
        <div class="col-12 social padding">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>

<!--- Footer -->
<footer class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-md-4">
            <img src="{{asset('img/w3newbie.png')}}" alt="Logo">
            <hr class="light">
            <p>555-555-5555</p>
            <p>email@email.com</p>
            <p>100 Street Name</p>
            <p>City, State, 00000</p>
        </div>
        <div class="col-md-4">
            <hr class="light">
            <h5>Our Hours</h5>
            <hr class="light">
            <p>Monday: 9am - 5pm</p>
            <p>Saturday: 10am - 4pm</p>
            <p>Sunday: closed</p>
        </div>
        <div class="col-md-4">
            <hr class="light">
            <h5>Service area</h5>
            <hr class="light">
            <p>City, State, 00000</p>
            <p>City, State, 00000</p>
            <p>City, State, 00000</p>
        </div>
        <div class="col-12">
            <hr class="light-100">
            <h5>&copy;w3newbie.com</h5>
        </div>
    </div>
</footer>






{{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
    {{--<div class="top-right links">--}}
{{--@auth--}}
        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
        {{--<a href="{{ route('login') }}">Login</a>--}}

                        {{--@if (Route::has('register'))--}}
            {{--<a href="{{ route('register') }}">Register</a>--}}
                        {{--@endif--}}
    {{--@endauth--}}
        {{--</div>--}}
{{--@endif--}}

    {{--<div class="content">--}}
        {{--<div class="title m-b-md">--}}
            {{--<img style="width: 100px" src="https://cdn-images-1.medium.com/max/1600/1*lUNmBw_oyS2ADWqZs4DLOA.png" alt="Docker"> Docker + Laravel <img style="width: 100px" src="https://upload.wikimedia.org/wikipedia/commons/3/3d/LaravelLogo.png" alt="Laravel">--}}
            {{--<p class="lead">Custom build of Laravel to work with Docker <br> by David Guardia</p>--}}
        {{--</div>--}}

        {{--<div class="links">--}}
            {{--<a href="https://laravel.com/docs">Docs</a>--}}
            {{--<a href="https://laracasts.com">Laracasts</a>--}}
            {{--<a href="https://laravel-news.com">News</a>--}}
            {{--<a href="https://blog.laravel.com">Blog</a>--}}
            {{--<a href="https://nova.laravel.com">Nova</a>--}}
            {{--<a href="https://forge.laravel.com">Forge</a>--}}
            {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- js -->
<!-- Scripts -->

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" defer></script>
</body>
</html>
