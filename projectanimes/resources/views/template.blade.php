<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
    <title>@yield('title')</title>
</head>
<body class="grey darken-3">

<header>
    <nav>
        <div class="nav-wrapper grey darken-4">
            <div class="row">
                <a href="#" class="brand-logo col l1">ProjectAnimes</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Home</a></li>
                </ul>
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
</footer>
<script src="{{asset('js/materialize.js')}}"></script>
</body>
</html>
