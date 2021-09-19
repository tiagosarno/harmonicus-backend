<?php

namespace App\Repositories\Eloquent;

use App\Models\Country;
use App\Repositories\Contracts\CountryRepositoryInterface;

class CountryRepository extends AbstractRepository implements CountryRepositoryInterface
{
    protected $model = Country::class;
}
