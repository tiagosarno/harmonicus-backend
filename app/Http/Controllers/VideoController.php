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

    // Code
}
