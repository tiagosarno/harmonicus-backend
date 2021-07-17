<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\SpecialityRepositoryInterface;

class SpecialityController extends AbstractController
{
    public function __construct(SpecialityRepositoryInterface $model)
    {
        parent::__construct($model);
    }
}
