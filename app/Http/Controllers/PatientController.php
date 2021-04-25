<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\PatientRepositoryInterface;
use Illuminate\Http\Request;

class PatientController extends AbstractController
{
    public function __construct(PatientRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
