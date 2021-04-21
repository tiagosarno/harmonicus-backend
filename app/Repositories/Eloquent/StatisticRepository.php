<?php

namespace App\Repositories\Eloquent;

use App\Models\Statistic;
use App\Repositories\Contracts\StatisticRepositoryInterface;

class StatisticRepository extends AbstractRepository implements StatisticRepositoryInterface
{
    protected $model = Statistic::class;
}
