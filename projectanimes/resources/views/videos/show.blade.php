@extends('template')

@section('title', 'Videos')

@section('header')

@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col l3">
                <div class="card">
                    <div class="card-image">
                        <a href="{{route('watch', 1)}}"><img src={{asset('covers/1.png')}}></a>
                    </div>
                    <div class="card-action">
                        <h6 class="center">
                            Naruto Shippuden 1
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')

@endsection
