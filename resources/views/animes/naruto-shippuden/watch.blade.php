@extends('template')
@extends('animes.naruto-shippuden.style')

@section('title', 'Assistir')

@section('header')

@endsection

@section('main')
    <div class="row"></div>
    <div class="container">
        <div class="row">
            <a id="prv" href="{{route('naruto-shippuden-watch', $previousEpisode)}}"
               class="col l1 pull-l2 m1 pull-m1 hide-on-small-and-down waves-effect waves-light btn-small
               orange darken-3" style="padding: 0">
                <i class="material-icons">navigate_before</i>
            </a>
            <a href="{{route('naruto-shippuden-episodes', 1)}}"
               class="col l1 push-l1 m1 push-m2 hide-on-small-and-down waves-effect waves-light btn-small
                orange darken-3" style="padding: 0">
                <i class="material-icons">menu</i>
            </a>
            <div class="col l9 pull-l4 m9 pull-m3 s12" style="padding: 0">
                <video id="plyr-video" class="responsive-video"
                       poster="https://animesorion.vip/wsx/ep/naruto-shippuuden-episodio-{{intval($episodeId)}}-animes-orion.jpg"
                       controls>
                    <source src="https://ns567958.ip-51-79-99.net/Uploads/Animes/N/naruto-shippuden/{{$episodeId}}.mp4"
                            type="video/mp4">
                </video>
            </div>
            <a id="nxt" href="{{route('naruto-shippuden-watch', $nextEpisode)}}"
               class="col l1 pull-l5 m1 pull-m4 hide-on-small-and-down waves-effect waves-light btn-small
               orange darken-3" style="padding: 0">
                <i class="material-icons">navigate_next</i>
            </a>
        </div>
        <div class="row">
            <a id="prv-mob" href="{{route('naruto-shippuden-watch', $previousEpisode)}}"
               class="col s2 push-s2 waves-effect waves-light btn-small
               orange darken-3" style="padding: 0">
                <i class="material-icons">navigate_before</i>
            </a>
            <a id="menu" href="{{route('naruto-shippuden-episodes', 1)}}"
               class="col s2 push-s3 waves-effect waves-light btn-small
               orange darken-3" style="padding: 0">
                <i class="material-icons">menu</i>
            </a>
            <a id="nxt-mob" href="{{route('naruto-shippuden-watch', $nextEpisode)}}"
               class="col s2 push-s4 waves-effect waves-light btn-small
               orange darken-3" style="padding: 0">
                <i class="material-icons">navigate_next</i>
            </a>
            <ul class="collapsible"  style="border: 0">
                <li class="active">
                    <div id="btnColDown" class="collapsible-header col s1 push-s5" style="padding: 0">
                        <a class="waves-effect waves-light btn-small transparent" style="padding: 0">
                            <i id="arrow_down" class="material-icons" style="margin: 0">keyboard_arrow_up</i>
                        </a>
                    </div>
                    <div id="dwnBtn" class="collapsible-body">
                        <br>
                        <h5 class="grey-text">Próximos episódios:</h5>
                        <br>
                        <?php
                            function setEpisode($epCover, $episodeNumber, $label)
                            {
                                $episodePath = route('naruto-shippuden-watch', "$episodeNumber");
                                $playBtnPath = asset('images/playBtn.png');

                                echo
                                "<div class='col l2 push-l1 z-depth-1 hoverable' style='border-radius: 5px'>
                                    <div class='card'>
                                        <div class='card-image $epCover'>
                                            <a href='$episodePath'>
                                                <img class='responsive-img playBtn' src='$playBtnPath' alt=''>
                                            </a>
                                        </div>
                                    </div>
                                    <h6 class='center grey-text'>$label</h6>
                                </div>";
                            }

                            setEpisode('ep' . $nextEpisodesList[0], $nextEpisodesList[0], 'Naruto Shippuden Episódio - '
                            . $nextEpisodesList[0]);

                            echo '<div class="row"></div>';

                            echo '<div id="secondEpisode">';
                            setEpisode('ep' . $nextEpisodesList[1], $nextEpisodesList[1], 'Naruto Shippuden Episódio - '
                            . $nextEpisodesList[1]);
                            echo '</div>';

                            echo '<div class="row"></div>';

                            echo '<div id="thirdEpisode">';
                            setEpisode('ep' . $nextEpisodesList[2], $nextEpisodesList[2], 'Naruto Shippuden Episódio - '
                            . $nextEpisodesList[2]);
                            echo '</div>';

                            echo '<div class="row"></div>';

                            echo '<div id="fourthEpisode">';
                            setEpisode('ep' . $nextEpisodesList[3], $nextEpisodesList[3], 'Naruto Shippuden Episódio - '
                            . $nextEpisodesList[3]);
                            echo '</div>';

                            echo '<div class="row"></div>';
                        ?>
                    </div>
                </li>
            </ul>
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
        //boot player
        document.addEventListener('DOMContentLoaded', () => {
            const player = plyr.setup("#plyr-video");

            var elems = document.querySelectorAll('.collapsible');
            var options = {
                onCloseStart: function()
                {
                    document.getElementById('arrow_down').innerText = 'keyboard_arrow_down';
                },
                onOpenStart: function ()
                {
                    document.getElementById('arrow_down').innerText = 'keyboard_arrow_up';
                }
            };
            var instances = M.Collapsible.init(elems, options);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        //get current episode number
        let pathname = window.location.pathname.split('/');
        let currentEpisode = pathname[3];

        //disable prv/next button
        if (currentEpisode === '1') {
            document.getElementById('prv').style.pointerEvents = "none";
            document.getElementById('prv-mob').style.pointerEvents = "none";
        }

        if (currentEpisode === '497')
        {
            document.getElementById('fourthEpisode').remove();
        }

        if (currentEpisode === '498')
        {
            document.getElementById('thirdEpisode').remove();
            document.getElementById('fourthEpisode').remove();
        }

        if (currentEpisode === '499')
        {
            document.getElementById('secondEpisode').remove();
            document.getElementById('thirdEpisode').remove();
            document.getElementById('fourthEpisode').remove();
        }

        if (currentEpisode === '500') {
            document.getElementById('nxt').style.pointerEvents = "none";
            document.getElementById('nxt-mob').style.pointerEvents = "none";
            document.getElementById('dwnBtn').remove();
            document.getElementById('btnColDown').style.pointerEvents = "none";
            document.getElementById('arrow_down').innerText = 'keyboard_arrow_down';
        }
    });
    </script>
@endsection
