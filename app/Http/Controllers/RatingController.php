<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\RatingRepositoryInterface;
use Illuminate\Http\Request;

class RatingController extends AbstractController
{
    public function __construct(RatingRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
