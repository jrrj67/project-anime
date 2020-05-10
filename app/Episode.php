<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public static function episodeList()
    {
        return
        [
            "1" => "https://www.googleapis.com/drive/v3/files/1HIT-HhZEKnRLL6Mb8Y4aslOZkLtLKsdY?alt=media&key=AIzaSyAXW-OsBS7G9HWYDWJK8Z7PHso2nsBKE2U"
        ];
    }
}
