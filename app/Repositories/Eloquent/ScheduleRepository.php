<?php

namespace App\Repositories\Eloquent;

use App\Models\Schedule;
use App\Repositories\Contracts\ScheduleRepositoryInterface;

class ScheduleRepository extends AbstractRepository implements ScheduleRepositoryInterface
{
    protected $model = Schedule::class;
}
