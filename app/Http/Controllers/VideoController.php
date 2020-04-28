<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show(Request $request)
    {
        $currentPage = $request->route('page');

        //validate route /0
        if($currentPage == 0)
        {
            return redirect()->route('videos', 1);
        }

        //paginate
        $perPage = 12;
        if ($currentPage == 1)
        {
            $i = 1;
        }

        if ($currentPage > 1)
        {

            $i = $currentPage * $perPage - 11;
        }

        for ( ;$i <= 12 * $currentPage; $i++)
        {
            $paginate[] = $i;
        }


        return view('videos.show', ['pgEpisode' => $paginate]);
    }

    public function watch(Request $request)
    {
        $episodeId = $request->route('id');

        //remove 0 from route episodes
        if (intval($episodeId) < 9)
        {
            $episodeId = '0'.$episodeId;
        }

        return view('videos.watch', ['id' => $episodeId]);
    }

}
