<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\PsychologistRepositoryInterface;
use Illuminate\Http\Request;

class PsychologistController extends AbstractController
{
    public function __construct(PsychologistRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
