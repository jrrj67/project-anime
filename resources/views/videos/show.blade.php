@extends('template')
@extends('videos.style')

@section('title', 'Videos')

@section('header')

@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col l3">
                <div class="card">
                    <div class="card-image ep1">
                        <a href="{{route('episode', '01')}}">
                            <img class="responsive-img playBtn" src="{{asset('images/playBtn.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <h6 class="center white-text">Naruto Shippuden 1</h6>
            </div>
            <div class="col l3">
                <div class="card">
                    <div class="card-image ep2">
                        <a href="{{route('episode', '02')}}">
                            <img class="responsive-img playBtn" src="{{asset('images/playBtn.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <h6 class="center white-text">Naruto Shippuden 2</h6>
            </div>
            <div class="col l3">
                <div class="card">
                    <div class="card-image ep3">
                        <a href="{{route('episode', '03')}}">
                            <img class="responsive-img playBtn" src="{{asset('images/playBtn.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <h6 class="center white-text">Naruto Shippuden 3</h6>
            </div>
            <div class="col l3">
                <div class="card">
                    <div class="card-image ep4">
                        <a href="{{route('episode', '04')}}">
                            <img class="responsive-img playBtn" src="{{asset('images/playBtn.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <h6 class="center white-text">Naruto Shippuden 4</h6>
            </div>
        </div>
    </div>
@endsection

@section('footer')

@endsection
{{--<a href="{{route('watch', 1)}}"><img src={{asset('covers/1.png')}}></a>--}}
