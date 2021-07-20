<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\ThemeRepositoryInterface;

class ThemeController extends AbstractController
{
    public function __construct(ThemeRepositoryInterface $model)
    {
        parent::__construct($model);
    }
}
