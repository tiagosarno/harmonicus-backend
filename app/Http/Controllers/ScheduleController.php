<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ScheduleRepositoryInterface;
use Illuminate\Http\Request;

class ScheduleController extends AbstractController
{
    public function __construct(ScheduleRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
