<?php

namespace App\Repositories\Eloquent;

use App\Models\Cost;
use App\Repositories\Contracts\CostRepositoryInterface;

class CostRepository extends AbstractRepository implements CostRepositoryInterface
{
    protected $model = Cost::class;
}
