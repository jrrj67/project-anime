<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show(Request $request)
    {
        $currentPage = $request->route('page');
        $maxPage = 21;
        $maxEpisode = 500;

        //validate route /0
        if($currentPage == 0 or $currentPage > $maxPage)
        {
            return abort('404');
            //return redirect()->route('episodes', 1);
        }

        //previous page
        $previousPage = $currentPage - 1;

        $nextPage = $currentPage + 1;
        //paginate
        $perPage = 24;
        if ($currentPage == 1)
        {
            $i = 1;
        }

        if ($currentPage > 1)
        {

            $i = $currentPage * $perPage - $perPage - 1;
        }

        for ( ;$i <= $perPage * $currentPage and $i <= $maxEpisode; $i++)
        {
            $pgEpisode[] = $i;
        }


        return view('videos.episodes', compact('pgEpisode', 'previousPage', 'nextPage'));
    }

    public function watch(Request $request)
    {
        $episodeId = $request->route('id');
        $previousEpisode = $episodeId - 1;
        $nextEpisode = $episodeId + 1;

        //remove 0 from route episodes
        if (intval($episodeId) < 9)
        {
            $episodeId = '0'.$episodeId;
        }

        return view('videos.watch', compact('episodeId', 'previousEpisode', 'nextEpisode'));
    }
}
