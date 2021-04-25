<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends AbstractController
{
    public function __construct(UserRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
