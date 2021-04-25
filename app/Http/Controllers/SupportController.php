<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\SupportRepositoryInterface;
use Illuminate\Http\Request;

class SupportController extends AbstractController
{
    public function __construct(SupportRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
