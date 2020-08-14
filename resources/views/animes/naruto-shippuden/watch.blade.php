@extends('template')
@extends('animes.naruto-shippuden.style')

@section('title', 'Assistir')

@section('header')

@endsection

@section('main')
    <div class="row">
        <div class="col l7 push-l1 hide-on-med-and-down">
            <div style="font-size: 20px" class="grey-text">Naruto Shippuden Episódio {{intval($episodeId)}}</div>
        </div>
        <div class="col s12 center hide-on-med-and-up">
            <div style="font-size: 20px" class="grey-text">Naruto Shippuden Episódio {{intval($episodeId)}}</div>
        </div>
    </div>
    <div class="">
        <div class="row">
            <div class="col l7 push-l1 m9 pull-m3 s12" style="">
                <video id="plyr-video" class="responsive-video"
                       poster="https://animesorion.vip/wsx/ep/naruto-shippuuden-episodio-{{intval($episodeId)}}-animes-orion.jpg"
                       controls>
                    <source src="{{$url}}"
                            type="video/mp4">
                </video>
            </div>
            <div class="col l3 push-l1 s12">
                <ul class="collapsible"  style="border: 0">
                    <div class="row"></div>
                    <li class="col l1 push-l2 s2 push-s2" style="padding: 0">
                        <a id="prv-mob" href="{{route('naruto-shippuden-watch', $previousEpisode)}}"
                           class="waves-effect waves-light btn
                            orange darken-3">
                            <i class="material-icons">navigate_before</i>
                        </a>
                    </li>
                    <li class="col l1 push-l4 s2 push-s3" style="padding: 0">
                        <a id="menu" href="{{route('naruto-shippuden-episodes', 1)}}"
                           class="waves-effect waves-light btn
                            orange darken-3">
                            <i class="material-icons">menu</i>
                        </a>
                    </li>
                    <li class="col l1 push-l6 s2 push-s4" style="padding: 0">
                        <a id="nxt-mob" href="{{route('naruto-shippuden-watch', $nextEpisode)}}"
                           class="waves-effect waves-light btn
                            orange darken-3">
                            <i class="material-icons">navigate_next</i>
                        </a>
                    </li>
                    <li class="active">
{{--                        <div id="btnColDown" class="collapsible-header col l2 push-l8 s1 push-s5">--}}
{{--                            <a class="waves-effect waves-light btn transparent" style="padding: 0">--}}
{{--                                <i id="arrow_down" class="material-icons white-text center" style="margin: 0">keyboard_arrow_up</i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                        <br>
                        <br>
                        <h6 class="center grey-text" style="padding-bottom: 10px">Próximos episódios:</h6>
                        <div id="dwnBtn" class="collapsible-body">
                            <?php
                            function setEpisode($epCover, $episodeNumber, $label)
                            {
                                $episodePath = route('naruto-shippuden-watch', "$episodeNumber");
                                $playBtnPath = asset('images/playBtn.png');

                                echo
                                "<div class='col l12 z-depth-1 hoverable' style='border-radius: 5px'>
                                    <div class='card'>
                                        <div class='card-image $epCover'>
                                            <a href='$episodePath'>
                                                <img class='responsive-img playBtn' src='$playBtnPath' alt=''>
                                            </a>
                                        </div>
                                    </div>
                                    <p class='center grey-text'>$label</p>
                                </div>";
                            }

                            setEpisode('ep' . $nextEpisodesList[0], $nextEpisodesList[0], 'Episódio '
                                . $nextEpisodesList[0]);

                            echo '<div class="row"></div>';

                            echo '<div id="secondEpisode">';
                            setEpisode('ep' . $nextEpisodesList[1], $nextEpisodesList[1], 'Episódio '
                                . $nextEpisodesList[1]);
                            echo '</div>';

                            echo '<div class="row"></div>';

                            echo '<div id="thirdEpisode">';
                            setEpisode('ep' . $nextEpisodesList[2], $nextEpisodesList[2], 'Episódio '
                                . $nextEpisodesList[2]);
                            echo '</div>';

                            echo '<div class="row"></div>';
                            ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
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
            document.getElementById('prv-mob').style.pointerEvents = "none";
            document.getElementById('prv-mob').classList.add('grey');
        }


        if (currentEpisode === '498')
        {
            document.getElementById('thirdEpisode').remove();
        }

        if (currentEpisode === '499')
        {
            document.getElementById('secondEpisode').remove();
            document.getElementById('thirdEpisode').remove();
        }

            if (currentEpisode === '500') {
                document.getElementById('nxt-mob').style.pointerEvents = "none";
                document.getElementById('nxt-mob').classList.add('grey');
                document.getElementById('dwnBtn').remove();
            // document.getElementById('btnColDown').style.pointerEvents = "none";
            // document.getElementById('arrow_down').innerText = 'keyboard_arrow_down';
        }
    });
    </script>
@endsection
