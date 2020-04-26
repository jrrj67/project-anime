<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show()
    {
        return view('videos.show');
    }

    public function watch(Request $request)
    {
        $episodeId = $request->route('id');

        return view('videos.watch', ['id' => $episodeId]);
    }
}
