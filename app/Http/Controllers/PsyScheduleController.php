<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\PsyScheduleRepositoryInterface;
use Illuminate\Http\Request;

class PsyScheduleController extends AbstractController
{
    public function __construct(PsyScheduleRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
