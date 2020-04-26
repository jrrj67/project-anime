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
                    <div class="card-image cover">
                        <a href="{{route('episode', 1)}}">
                            <img class="responsive-img playBtn" src="{{asset('images/playBtn.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <h6 class="center white-text">Naruto Shippuden 1</h6>
            </div>
        </div>
    </div>
@endsection

@section('footer')

@endsection
{{--<a href="{{route('watch', 1)}}"><img src={{asset('covers/1.png')}}></a>--}}
