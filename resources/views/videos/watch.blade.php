@extends('template')

@section('title', 'Assistir')

@section('header')

@endsection

@section('main')
    <div class="row"></div>
    <div class="container">
        <div class="row">
            <video class="responsive-video col l12" controls>
                <source src="https://ns567958.ip-51-79-99.net/Uploads/Animes/N/naruto-shippuden/{{$id}}.mp4" type="video/mp4">
            </video>
        </div>
    </div>
@endsection

@section('footer')

@endsection
