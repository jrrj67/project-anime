<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class NarutoShippudenController extends Controller
{
    public function show(Request $request)
    {
        $currentPage = $request->route('page');
        $maxPage = 17;
        $maxEpisode = 500;

        //validate route /0
        if($currentPage == 0 or $currentPage > $maxPage)
        {
            return abort('404');
        }

        //previous page
        $previousPage = $currentPage - 1;

        $nextPage = $currentPage + 1;

        //paginate
        $perPage = 30;

        if ($currentPage == 1)
        {
            $i = 1;
        }

        if ($currentPage > 1)
        {

            $i = $currentPage * $perPage - $perPage + 1;
        }

        for ( ;$i <= $perPage * $currentPage and $i <= $maxEpisode; $i++)
        {
            $pgEpisode[] = $i;
        }

        return view('animes.naruto-shippuden.episodes', compact('pgEpisode', 'previousPage', 'nextPage'));
    }

    public function watch(Request $request)
    {
        $url = $this->getUrl();
        $episodeId = $request->route('id');
        $previousEpisode = $episodeId - 1;
        $nextEpisode = $episodeId + 1;

        //remove 0 from route episodes
        if (intval($episodeId) < 9)
        {
            $episodeId = '0'.$episodeId;
        }

        //next episodes
        $nextEpisodeId = $episodeId + 1;
        $nextEpisodes = $episodeId + 5;

        for (; $nextEpisodeId <= $nextEpisodes; $nextEpisodeId++)
        {
            $nextEpisodesList[] = $nextEpisodeId;
        }

        return view('animes.naruto-shippuden.watch', compact('episodeId',
            'previousEpisode', 'nextEpisode', 'nextEpisodesList', 'url'));
    }

    public function getUrl()
    {
        $body = Http::get('https://www.animesorion.vip/episodio/12')->body();
        dd($body);
        $url = Str::between($body, 'ns', '.net');
        $url = Str::before($url, '.net');

        return $url;
    }
}
