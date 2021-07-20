<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AreaRepositoryInterface;

class AreaController extends AbstractController
{
    public function __construct(AreaRepositoryInterface $model)
    {
        parent::__construct($model);
    }
}
