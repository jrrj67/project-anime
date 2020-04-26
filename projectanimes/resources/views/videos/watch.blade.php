@extends('template')

@section('title', 'Assistir')

@section('header')

@endsection

@section('main')
    <div class="row"></div>
    <div class="container">
        <div class="row">
            <video class="responsive-video col l12" controls>
                <source src="https://github.com/jrrj67/pa-server/raw/master/naruto-shippuden/{{$id}}.mp4" type="video/mp4">
            </video>
        </div>
    </div>
@endsection

@section('footer')

@endsection
