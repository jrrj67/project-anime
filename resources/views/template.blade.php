<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('css/icons.css')}}">
    <title>@yield('title')</title>
</head>
<body class="grey darken-4">

<header>
    <nav>
        <div class="nav-wrapper orange darken-3">
            <div class="row">
                <a href="{{route('home')}}" class="brand-logo center">ProjectAnimes</a>
            </div>
        </div>
    </nav>
    @yield('header')
</header>

<main>
    @yield('main')
</main>

<footer>
    @yield('footer')

    <footer class="page-footer orange darken-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">ProjectAnimes</h5>
                    <p class="grey-text text-lighten-4">Meu site de animes.</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2020 Ricardo Rocha
            </div>
        </div>
    </footer>
</footer>
<script src="{{asset('js/materialize.js')}}"></script>
</body>
</html>
