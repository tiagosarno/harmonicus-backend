<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\StatisticRepositoryInterface;
use Illuminate\Http\Request;

class StatisticController extends AbstractController
{
    public function __construct(StatisticRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
