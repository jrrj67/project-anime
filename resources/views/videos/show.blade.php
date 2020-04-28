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

            setEpisode('ep'.$pgEpisode[0], $pgEpisode[0], 'Naruto Shippuden '.$pgEpisode[0]);
            setEpisode('ep'.$pgEpisode[1], $pgEpisode[1], 'Naruto Shippuden '.$pgEpisode[1]);
            setEpisode('ep'.$pgEpisode[2], $pgEpisode[2], 'Naruto Shippuden '.$pgEpisode[2]);
            setEpisode('ep'.$pgEpisode[3], $pgEpisode[3], 'Naruto Shippuden '.$pgEpisode[3]);
            ?>
        </div>
        <div class="row">
            <?php
            setEpisode('ep'.$pgEpisode[4], $pgEpisode[4], 'Naruto Shippuden '.$pgEpisode[4]);
            setEpisode('ep'.$pgEpisode[5], $pgEpisode[5], 'Naruto Shippuden '.$pgEpisode[5]);
            setEpisode('ep'.$pgEpisode[6], $pgEpisode[6], 'Naruto Shippuden '.$pgEpisode[6]);
            setEpisode('ep'.$pgEpisode[7], $pgEpisode[7], 'Naruto Shippuden '.$pgEpisode[7]);
            ?>
        </div>
        <div class="row">
            <?php
            setEpisode('ep'.$pgEpisode[8], $pgEpisode[8], 'Naruto Shippuden '.$pgEpisode[8]);
            setEpisode('ep'.$pgEpisode[9], $pgEpisode[9], 'Naruto Shippuden '.$pgEpisode[9]);
            setEpisode('ep'.$pgEpisode[10], $pgEpisode[10], 'Naruto Shippuden '.$pgEpisode[10]);
            setEpisode('ep'.$pgEpisode[11], $pgEpisode[11], 'Naruto Shippuden '.$pgEpisode[11]);
            ?>
        </div>
        <div class="row">
            <div class="col l12 center">
                <ul class="pagination">
                    <li class="disabled"><a class="grey-text" href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li id="1" class="waves-effect darken-3"><a class="white-text" href="{{route('videos', 1)}}">1</a></li>
                    <li id="2" class="waves-effect darken-3"><a class="white-text" href="{{route('videos', 2)}}">2</a></li>
                    <li id="3" class="waves-effect darken-3"><a class="white-text" href="{{route('videos', 3)}}">3</a></li>
                    <li id="4" class="waves-effect darken-3"><a class="white-text" href="{{route('videos', 4)}}">4</a></li>
                    <li id="5" class="waves-effect darken-3"><a class="white-text" href="{{route('videos', 5)}}">5</a></li>
                    <li id="5" class="waves-effect darken-3"><a class="white-text" href="{{route('videos', 6)}}">6</a></li>
                    <li id="5" class="waves-effect darken-3"><a class="white-text" href="{{route('videos', 7)}}">7</a></li>
                    <li class="waves-effect"><a class="grey-text"  href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('footer')

@endsection
