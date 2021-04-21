<?php

namespace App\Repositories\Eloquent;

use App\Models\PsySchedule;
use App\Repositories\Contracts\PsyScheduleRepositoryInterface;

class PsyScheduleRepository extends AbstractRepository implements PsyScheduleRepositoryInterface
{
    protected $model = PsySchedule::class;
}
