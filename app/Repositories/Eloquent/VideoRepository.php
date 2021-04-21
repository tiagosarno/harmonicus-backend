<?php

namespace App\Repositories\Eloquent;

use App\Models\Video;
use App\Repositories\Contracts\VideoRepositoryInterface;

class VideoRepository extends AbstractRepository implements VideoRepositoryInterface
{
    protected $model = Video::class;
}
