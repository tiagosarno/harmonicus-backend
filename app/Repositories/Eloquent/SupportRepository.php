<?php

namespace App\Repositories\Eloquent;

use App\Models\Support;
use App\Repositories\Contracts\SupportRepositoryInterface;

class SupportRepository extends AbstractRepository implements SupportRepositoryInterface
{
    protected $model = Support::class;
}
