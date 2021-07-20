<?php

namespace App\Repositories\Eloquent;

use App\Models\Area;
use App\Repositories\Contracts\AreaRepositoryInterface;

class AreaRepository extends AbstractRepository implements AreaRepositoryInterface
{
    protected $model = Area::class;
}
