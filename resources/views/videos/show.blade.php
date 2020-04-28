@extends('template')
@extends('videos.style')

@section('title', 'Videos')

@section('header')

@endsection

@section('main')
    <div class="row"></div>
    <div class="container">
        <div class="row">
            <?php
            function setEpisode($epCover, $episodeNumber, $label)
            {
                $episodePath = route('episode', "$episodeNumber");
                $playBtnPath = asset('images/playBtn.png');

                echo
                "<div class='col l3'>
                        <div class='card'>
                            <div class='card-image $epCover'>
                                <a href='$episodePath'>
                                    <img class='responsive-img playBtn' src='$playBtnPath' alt=''>
                                </a>
                            </div>
                        </div>
                        <h6 class='center white-text'>$label</h6>
                </div>";
            }

            setEpisode('ep1', '01', 'Naruto Shippuden 1');
            setEpisode('ep2', '02', 'Naruto Shippuden 2');
            setEpisode('ep3', '03', 'Naruto Shippuden 3');
            setEpisode('ep4', '04', 'Naruto Shippuden 4');
            ?>
        </div>
        <div class="row">
            <?php
            setEpisode('ep5', '05', 'Naruto Shippuden 5');
            setEpisode('ep6', '06', 'Naruto Shippuden 6');
            setEpisode('ep7', '07', 'Naruto Shippuden 7');
            setEpisode('ep8', '08', 'Naruto Shippuden 8');
            ?>
        </div>
        <div class="row">
            <?php
            setEpisode('ep9', '09', 'Naruto Shippuden 9');
            setEpisode('ep10', '10', 'Naruto Shippuden 10');
            setEpisode('ep11', '11', 'Naruto Shippuden 11');
            setEpisode('ep12', '12', 'Naruto Shippuden 12');
            ?>
        </div>
        <div class="row">
            <div class="col l12 center">
                <ul class="pagination">
                    <li class="disabled"><a class="grey-text" href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="orange darken-3"><a href="#!">1</a></li>
                    <li class="waves-effect"><a class="white-text" href="#!">2</a></li>
                    <li class="waves-effect"><a class="white-text" href="#!">3</a></li>
                    <li class="waves-effect"><a class="white-text" href="#!">4</a></li>
                    <li class="waves-effect"><a class="white-text" href="#!">5</a></li>
                    <li class="waves-effect"><a class="grey-text"  href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('footer')

@endsection
{{--<a href="{{route('watch', 1)}}"><img src={{asset('covers/1.png')}}></a>--}}
<?


?>
