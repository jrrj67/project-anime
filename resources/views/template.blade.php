<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('css/icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/plyr.css')}}">
    <title>@yield('title')</title>
</head>
<body class="grey darken-4">

<header>
    <nav>
        <div class="nav-wrapper orange darken-3">
            <div class="row">
                <a href="{{route('home')}}" class="brand-logo col l1 s1 push-s3">ProjectAnimes</a>
                <a class='col l1 push-l10 s2 push-s9 dropdown-trigger' href='#' data-target='dropdown1'>
                    <i class="material-icons">search</i>
                </a>
                <div style="padding-right: 0">
                    <div id='dropdown1' class='col l12 s12 dropdown-content'>
                        <div class="input-field" style="padding-top: 10px">
                                <input type="text" value="Pesquise seu anime :)" onfocus="this.value=''" id="autocomplete-input" class="autocomplete grey darken-3 white-text"
                                       autocomplete="off" style="text-indent:10px; border-radius: 5px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('header')
</header>

<main>
    <div class="row"></div>
    @yield('main')
</main>

<footer>

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
<script src="{{asset('js/search.js')}}"></script>
@yield('footer')
</body>
</html>
