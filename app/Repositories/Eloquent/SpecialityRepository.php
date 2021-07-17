<?php

namespace App\Repositories\Eloquent;

use App\Models\Speciality;
use App\Repositories\Contracts\SpecialityRepositoryInterface;

class SpecialityRepository extends AbstractRepository implements SpecialityRepositoryInterface
{
    protected $model = Speciality::class;
}
