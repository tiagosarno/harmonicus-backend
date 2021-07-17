<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\RegionalRepositoryInterface;

class RegionalController extends AbstractController
{
    public function __construct(RegionalRepositoryInterface $model)
    {
        parent::__construct($model);
    }
}
