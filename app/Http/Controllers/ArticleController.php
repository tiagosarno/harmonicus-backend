<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ArticleRepositoryInterface;
use Illuminate\Http\Request;

class ArticleController extends AbstractController
{
    public function __construct(ArticleRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
