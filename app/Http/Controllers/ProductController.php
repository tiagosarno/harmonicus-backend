<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends AbstractController
{
    public function __construct(ProductRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
