<?php

namespace App\Repositories\Eloquent;

use App\Models\Patient;
use App\Repositories\Contracts\PatientRepositoryInterface;

class PatientRepository extends AbstractRepository implements PatientRepositoryInterface
{
    protected $model = Patient::class;
}
