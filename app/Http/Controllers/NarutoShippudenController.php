<?php

namespace App\Http\Controllers;

use App\NarutoShippuden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class NarutoShippudenController extends Controller
{
    public function show(Request $request)
    {
        $currentPage = $request->route('page');

        //validate route /0
        if($currentPage == 0 or $currentPage > NarutoShippuden::MAX_PAGE)
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

        for ( ;$i <= $perPage * $currentPage and $i <= NarutoShippuden::MAX_EPISODE; $i++)
        {
            $pgEpisode[] = $i;
        }

        return view('animes.naruto-shippuden.episodes', compact('pgEpisode', 'previousPage', 'nextPage'));
    }

    public function watch(Request $request)
    {
        $episodeId = $request->route('id');
        $url = $this->getUrl($episodeId);
        $previousEpisode = $episodeId - 1;
        $nextEpisode = $episodeId + 1;

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

    public function getUrl($episodeId)
    {
        $body = Http::get("https://www.dattebane.com/NarutoShippuuden/$episodeId")->body();
        $url = Str::between($body, 'file: \'https://', '.mp4');
        $url = Str::before($url, '.mp4');
        $finalUrl = "https://" . $url . '.mp4';

        return $finalUrl;
    }
}
