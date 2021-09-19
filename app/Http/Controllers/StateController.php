<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\StateRepositoryInterface;

class StateController extends AbstractController
{
    public function __construct(StateRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
