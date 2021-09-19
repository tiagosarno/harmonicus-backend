<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\CountryRepositoryInterface;

class CountryController extends AbstractController
{
    public function __construct(CountryRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
