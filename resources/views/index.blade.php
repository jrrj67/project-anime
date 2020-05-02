@extends('template')

@section('title', 'ProjectAnimes')

@section('header')

@endsection

@section('main')
    <div class="row"></div>
    <div class="row"></div>
    <div class="container">
        <div class="row">
            <div class="col l12">
                <div class="row">
                    <div class="col l3">
                        <a class="hoverable z-depth-1" href="{{route('naruto-shippuden-episodes', 1)}}">
                            <img class="responsive-img" src="{{asset('covers/naruto-shippuden/naruto-cover.jpg')}}" alt="">
                        </a>
                            <h6 class="center white-text">Naruto Shippuden</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
@endsection

@section('footer')

@endsection
