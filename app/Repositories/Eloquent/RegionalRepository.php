<?php

namespace App\Repositories\Eloquent;

use App\Models\Regional;
use App\Repositories\Contracts\RegionalRepositoryInterface;

class RegionalRepository extends AbstractRepository implements RegionalRepositoryInterface
{
    protected $model = Regional::class;
}
