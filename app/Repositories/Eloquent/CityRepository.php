<?php

namespace App\Repositories\Eloquent;

use App\Models\City;
use App\Repositories\Contracts\CityRepositoryInterface;

class CityRepository extends AbstractRepository implements CityRepositoryInterface
{
    protected $model = City::class;
}
