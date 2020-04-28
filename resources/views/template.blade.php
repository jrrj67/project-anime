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
                <a href="{{route('videos')}}" class="brand-logo center">ProjectAnimes</a>
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
