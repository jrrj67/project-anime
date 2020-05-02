@extends('template')

@section('title', 'Assistir')

@section('header')

@endsection

@section('main')
    <div class="row"></div>
    <div class="row">
        <div class="col l6 push-l3">
            <video id="plyr-video" class="responsive-video"
                   poster="https://animesorion.vip/wsx/ep/naruto-shippuuden-episodio-{{intval($episodeId)}}-animes-orion.jpg" controls>
                <source src="https://ns567958.ip-51-79-99.net/Uploads/Animes/N/naruto-shippuden/{{$episodeId}}.mp4" type="video/mp4">
            </video>
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
