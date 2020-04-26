@extends('template')

@section('title', 'Assistir')

@section('header')

@endsection

@section('main')
    <div class="row"></div>
    <div class="container">
        <div class="row">
            <video class="responsive-video col l12" controls>
                <source src="https://www.googleapis.com/drive/v3/files/1rv7eQu9Q9IspYGzym_XWtvGJU5yqu3ln?alt=media&key=AIzaSyBQ9GUq5NPGdrdVJTpiWCWIZ3loLFzKNn4" type="video/mp4">
            </video>
        </div>
    </div>
@endsection

@section('footer')

@endsection
