<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\CityRepositoryInterface;

class CityController extends AbstractController
{
    public function __construct(CityRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
