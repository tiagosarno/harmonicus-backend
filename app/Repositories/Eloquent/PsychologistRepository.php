<?php

namespace App\Repositories\Eloquent;

use App\Models\Psychologist;
use App\Repositories\Contracts\PsychologistRepositoryInterface;

class PsychologistRepository extends AbstractRepository implements PsychologistRepositoryInterface
{
    protected $model = Psychologist::class;
}
