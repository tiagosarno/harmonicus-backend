<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\VideoRepositoryInterface;
use Illuminate\Http\Request;

class VideoController extends AbstractController
{
    public function __construct(VideoRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    public function getYouTubeData($queryString)
    {
        $url = 'https://www.youtube.com/watch?' . $queryString;
        $saida = simplexml_load_file("https://www.youtube.com/oembed?url=".$url."&format=xml");
        return json_encode($saida);
    }
}
