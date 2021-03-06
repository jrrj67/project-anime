@extends('template')
@extends('animes.naruto-shippuden.style')

@section('title', 'Videos')

@section('header')

@endsection

@section('main')
    <div class="row" style="z-index: -1">
        <div class="col l10 push-l1">
            <div class="row">
                <div class="col l3">
                    <img class="responsive-img z-depth-2 hoverable" style="border-radius: 5px"
                         src="{{asset('covers/naruto-shippuden/naruto-cover.jpg')}}" alt="">
                </div>
                <div class="col l9 grey-text">
                    <p>
                    <h5>Naruto Shippuden</h5>
                    Episódios: 500
                    </p>
                    <br>
                    <p>
                    <h6>Naruto: Shippūden (ナルト疾風伝, Naruto Shippūden; Literalmente significa "Crônicas do Furacão
                        Naruto") é o anime adaptado da parte secundária do mangá, definindo dois anos e meio após a
                        deserção de Sasuke e o término do treinamento de Naruto Uzumaki com Jiraiya e seu retorno para
                        Konohagakure.</h6>
                    </p>
                </div>
            </div>
            <div class="row"></div>
            <div class="divider grey"></div>
        </div>
    </div>
    <div>
        <div class="row">
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

            setEpisode('ep' . $pgEpisode[0], $pgEpisode[0], 'Naruto Shippuden Episódio - ' . $pgEpisode[0]);
            setEpisode('ep' . $pgEpisode[1], $pgEpisode[1], 'Naruto Shippuden Episódio - ' . $pgEpisode[1]);
            setEpisode('ep' . $pgEpisode[2], $pgEpisode[2], 'Naruto Shippuden Episódio - ' . $pgEpisode[2]);
            setEpisode('ep' . $pgEpisode[3], $pgEpisode[3], 'Naruto Shippuden Episódio - ' . $pgEpisode[3]);
            setEpisode('ep' . $pgEpisode[4], $pgEpisode[4], 'Naruto Shippuden Episódio - ' . $pgEpisode[4]);
            ?>
        </div>
        <div class="row">
            <?php
            setEpisode('ep' . $pgEpisode[5], $pgEpisode[5], 'Naruto Shippuden Episódio - ' . $pgEpisode[5]);
            setEpisode('ep' . $pgEpisode[6], $pgEpisode[6], 'Naruto Shippuden Episódio - ' . $pgEpisode[6]);
            setEpisode('ep' . $pgEpisode[7], $pgEpisode[7], 'Naruto Shippuden Episódio - ' . $pgEpisode[7]);
            setEpisode('ep' . $pgEpisode[8], $pgEpisode[8], 'Naruto Shippuden Episódio - ' . $pgEpisode[8]);
            setEpisode('ep' . $pgEpisode[9], $pgEpisode[9], 'Naruto Shippuden Episódio - ' . $pgEpisode[9]);
            ?>
        </div>

        <div class="row">
            <?php
            setEpisode('ep' . $pgEpisode[10], $pgEpisode[10], 'Naruto Shippuden Episódio - ' . $pgEpisode[10]);
            setEpisode('ep' . $pgEpisode[11], $pgEpisode[11], 'Naruto Shippuden Episódio - ' . $pgEpisode[11]);
            setEpisode('ep' . $pgEpisode[12], $pgEpisode[12], 'Naruto Shippuden Episódio - ' . $pgEpisode[12]);
            setEpisode('ep' . $pgEpisode[13], $pgEpisode[13], 'Naruto Shippuden Episódio - ' . $pgEpisode[13]);
            setEpisode('ep' . $pgEpisode[14], $pgEpisode[14], 'Naruto Shippuden Episódio - ' . $pgEpisode[14]);
            ?>
        </div>
        <div class="row">
            <?php
            setEpisode('ep' . $pgEpisode[15], $pgEpisode[15], 'Naruto Shippuden Episódio - ' . $pgEpisode[15]);
            setEpisode('ep' . $pgEpisode[16], $pgEpisode[16], 'Naruto Shippuden Episódio - ' . $pgEpisode[16]);
            setEpisode('ep' . $pgEpisode[17], $pgEpisode[17], 'Naruto Shippuden Episódio - ' . $pgEpisode[17]);
            setEpisode('ep' . $pgEpisode[18], $pgEpisode[18], 'Naruto Shippuden Episódio - ' . $pgEpisode[18]);
            setEpisode('ep' . $pgEpisode[19], $pgEpisode[19], 'Naruto Shippuden Episódio - ' . $pgEpisode[19]);
            ?>
        </div>
        <div class="row">
            <?php
            if (isset($pgEpisode[20])) {
                setEpisode('ep' . $pgEpisode[20], $pgEpisode[20], 'Naruto Shippuden Episódio - ' . $pgEpisode[20]);
                setEpisode('ep' . $pgEpisode[21], $pgEpisode[21], 'Naruto Shippuden Episódio - ' . $pgEpisode[21]);
                setEpisode('ep' . $pgEpisode[22], $pgEpisode[22], 'Naruto Shippuden Episódio - ' . $pgEpisode[22]);
                setEpisode('ep' . $pgEpisode[23], $pgEpisode[23], 'Naruto Shippuden Episódio - ' . $pgEpisode[23]);
                setEpisode('ep' . $pgEpisode[24], $pgEpisode[24], 'Naruto Shippuden Episódio - ' . $pgEpisode[24]);
            }
            ?>
        </div>
        <div class="row">
            <?php
            if (isset($pgEpisode[25])) {
                setEpisode('ep' . $pgEpisode[25], $pgEpisode[25], 'Naruto Shippuden Episódio - ' . $pgEpisode[25]);
                setEpisode('ep' . $pgEpisode[26], $pgEpisode[26], 'Naruto Shippuden Episódio - ' . $pgEpisode[26]);
                setEpisode('ep' . $pgEpisode[27], $pgEpisode[27], 'Naruto Shippuden Episódio - ' . $pgEpisode[27]);
                setEpisode('ep' . $pgEpisode[28], $pgEpisode[28], 'Naruto Shippuden Episódio - ' . $pgEpisode[28]);
                setEpisode('ep' . $pgEpisode[29], $pgEpisode[29], 'Naruto Shippuden Episódio - ' . $pgEpisode[29]);
            }
            ?>
        </div>
        <div class="row">
            <div class="col l10 push-l1 center">
                <ul class="pagination">
                    <li id="prv" class="waves-effect"><a class="grey-text"
                                                         href="{{route('naruto-shippuden-episodes', $previousPage)}}"><i
                                class="material-icons">chevron_left</i></a></li>
                    <li id="1" class="waves-effect darken-3"><a class="grey-text"
                                                                href="{{route('naruto-shippuden-episodes', 1)}}">1</a>
                    </li>
                    <li id="2" class="waves-effect darken-3"><a class="grey-text"
                                                                href="{{route('naruto-shippuden-episodes', 2)}}">2</a>
                    </li>
                    <li id="3" class="waves-effect darken-3"><a class="grey-text"
                                                                href="{{route('naruto-shippuden-episodes', 3)}}">3</a>
                    </li>
                    <li id="4" class="waves-effect darken-3"><a class="grey-text"
                                                                href="{{route('naruto-shippuden-episodes', 4)}}">4</a>
                    </li>
                    <li id="5" class="waves-effect darken-3"><a class="grey-text"
                                                                href="{{route('naruto-shippuden-episodes', 5)}}">5</a>
                    </li>
                    <li id="6" class="waves-effect darken-3"><a class="grey-text"
                                                                href="{{route('naruto-shippuden-episodes', 6)}}">6</a>
                    </li>
                    <li id="7" class="waves-effect darken-3"><a class="grey-text"
                                                                href="{{route('naruto-shippuden-episodes', 7)}}">7</a>
                    </li>
                    <li id="8" class="waves-effect darken-3"><a class="grey-text"
                                                                href="{{route('naruto-shippuden-episodes', 8)}}">8</a>
                    </li>
                    <li id="9" class="waves-effect darken-3"><a class="grey-text"
                                                                href="{{route('naruto-shippuden-episodes', 9)}}">9</a>
                    </li>
                    <li id="10" class="waves-effect darken-3"><a class="grey-text"
                                                                 href="{{route('naruto-shippuden-episodes', 10)}}">10</a>
                    </li>
                    <li id="11" class="waves-effect darken-3"><a class="grey-text"
                                                                 href="{{route('naruto-shippuden-episodes', 11)}}">11</a>
                    </li>
                    <li id="12" class="waves-effect darken-3"><a class="grey-text"
                                                                 href="{{route('naruto-shippuden-episodes', 12)}}">12</a>
                    </li>
                    <li id="13" class="waves-effect darken-3"><a class="grey-text"
                                                                 href="{{route('naruto-shippuden-episodes', 13)}}">13</a>
                    </li>
                    <li id="14" class="waves-effect darken-3"><a class="grey-text"
                                                                 href="{{route('naruto-shippuden-episodes', 14)}}">14</a>
                    </li>
                    <li id="15" class="waves-effect darken-3"><a class="grey-text"
                                                                 href="{{route('naruto-shippuden-episodes', 15)}}">15</a>
                    </li>
                    <li id="16" class="waves-effect darken-3"><a class="grey-text"
                                                                 href="{{route('naruto-shippuden-episodes', 16)}}">16</a>
                    </li>
                    <li id="17" class="waves-effect darken-3"><a class="grey-text"
                                                                 href="{{route('naruto-shippuden-episodes', 17)}}">17</a>
                    </li>
                    <li id="nxt" class="waves-effect"><a class="grey-text"
                                                         href="{{route('naruto-shippuden-episodes', $nextPage)}}"><i
                                class="material-icons">chevron_right</i></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        //set current page paginator color
        let pathname = window.location.pathname.split('/');
        let currentPage = pathname[3];
        document.getElementById(currentPage).classList.add("orange");

        // disable prv button
        if (currentPage === '1') {
            document.getElementById('prv').style.pointerEvents = "none";
        }
        if (currentPage === '17') {
            document.getElementById('nxt').style.pointerEvents = "none";
        }

    </script>
@endsection
