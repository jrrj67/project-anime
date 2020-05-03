@extends('template')

@section('title', 'Assistir')

@section('header')

@endsection

@section('main')
    <div class="row"></div>
    <div class="container">
        <div class="row">
            <a href="{{route('naruto-shippuden-watch', $previousEpisode)}}"
               class="col l1 pull-l2 waves-effect waves-light btn-small orange darken-4">
                <i class="material-icons">navigate_before</i>
            </a>
            <a href="{{route('naruto-shippuden-episodes', 1)}}"
               class="col l1 push-l1 waves-effect waves-light btn-small orange darken-4">
                <i class="material-icons">menu</i>
            </a>
            <div class="col l9 pull-l4 m10" style="padding: 0">
                <video id="plyr-video" class="responsive-video"
                       poster="https://animesorion.vip/wsx/ep/naruto-shippuuden-episodio-{{intval($episodeId)}}-animes-orion.jpg"
                       controls>
                    <source src="https://ns567958.ip-51-79-99.net/Uploads/Animes/N/naruto-shippuden/{{$episodeId}}.mp4"
                            type="video/mp4">
                </video>
            </div>
            <a href="{{route('naruto-shippuden-watch', $nextEpisode)}}"
               class="col l1 pull-l5 waves-effect waves-light btn-small orange darken-4">
                <i class="material-icons">navigate_next</i>
            </a>
        </div>
    </div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>

@endsection

@section('footer')
    <script src="{{asset('js/plyr.js')}}">
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const player = plyr.setup("#plyr-video");
        });
    </script>
@endsection
