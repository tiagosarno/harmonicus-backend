<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AdminRepositoryInterface;

class AdminController extends AbstractController
{
    public function __construct(AdminRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
