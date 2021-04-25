<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\CostRepositoryInterface;

class CostController extends AbstractController
{
    public function __construct(CostRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
