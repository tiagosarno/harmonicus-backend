<?php

namespace App\Repositories\Eloquent;

use App\Models\State;
use App\Repositories\Contracts\StateRepositoryInterface;

class StateRepository extends AbstractRepository implements StateRepositoryInterface
{
    protected $model = State::class;
}
