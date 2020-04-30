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
                $episodePath = route('watch', "$episodeNumber");
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
            <?php
            setEpisode('ep'.$pgEpisode[12], $pgEpisode[12], 'Naruto Shippuden '.$pgEpisode[12]);
            setEpisode('ep'.$pgEpisode[13], $pgEpisode[13], 'Naruto Shippuden '.$pgEpisode[13]);
            setEpisode('ep'.$pgEpisode[14], $pgEpisode[14], 'Naruto Shippuden '.$pgEpisode[14]);
            setEpisode('ep'.$pgEpisode[15], $pgEpisode[15], 'Naruto Shippuden '.$pgEpisode[15]);
            ?>
        </div>
        <div class="row">
            <?php
            setEpisode('ep'.$pgEpisode[16], $pgEpisode[16], 'Naruto Shippuden '.$pgEpisode[16]);
            setEpisode('ep'.$pgEpisode[17], $pgEpisode[17], 'Naruto Shippuden '.$pgEpisode[17]);
            setEpisode('ep'.$pgEpisode[18], $pgEpisode[18], 'Naruto Shippuden '.$pgEpisode[18]);
            setEpisode('ep'.$pgEpisode[19], $pgEpisode[19], 'Naruto Shippuden '.$pgEpisode[19]);
            ?>
        </div>
        <div class="row">
            <?php
            setEpisode('ep'.$pgEpisode[20], $pgEpisode[20], 'Naruto Shippuden '.$pgEpisode[20]);
            setEpisode('ep'.$pgEpisode[21], $pgEpisode[21], 'Naruto Shippuden '.$pgEpisode[21]);
            if (isset($pgEpisode[22]))
            {
                setEpisode('ep'.$pgEpisode[22], $pgEpisode[22], 'Naruto Shippuden '.$pgEpisode[22]);
                setEpisode('ep'.$pgEpisode[23], $pgEpisode[23], 'Naruto Shippuden '.$pgEpisode[23]);
            }
            ?>
        </div>
        <div class="row">
            <div class="col l12 center">
                <ul class="pagination">
                    <li id="prv" class="waves-effect"><a class="grey-text" href="{{route('episodes', $previousPage)}}"><i class="material-icons">chevron_left</i></a></li>
                    <li id="1" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 1)}}">1</a></li>
                    <li id="2" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 2)}}">2</a></li>
                    <li id="3" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 3)}}">3</a></li>
                    <li id="4" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 4)}}">4</a></li>
                    <li id="5" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 5)}}">5</a></li>
                    <li id="6" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 6)}}">6</a></li>
                    <li id="7" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 7)}}">7</a></li>
                    <li id="8" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 8)}}">8</a></li>
                    <li id="9" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 9)}}">9</a></li>
                    <li id="10" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 10)}}">10</a></li>
                    <li id="11" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 11)}}">11</a></li>
                    <li id="12" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 12)}}">12</a></li>
                    <li id="13" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 13)}}">13</a></li>
                    <li id="14" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 14)}}">14</a></li>
                    <li id="15" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 15)}}">15</a></li>
                    <li id="16" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 16)}}">16</a></li>
                    <li id="17" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 17)}}">17</a></li>
                    <li id="18" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 18)}}">18</a></li>
                    <li id="19" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 19)}}">19</a></li>
                    <li id="20" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 20)}}">20</a></li>
                    <li id="21" class="waves-effect darken-3"><a class="white-text" href="{{route('episodes', 21)}}">21</a></li>
                    <li id="nxt" class="waves-effect"><a class="grey-text"  href="{{route('episodes', $nextPage)}}"><i class="material-icons">chevron_right</i></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('footer')

@endsection
