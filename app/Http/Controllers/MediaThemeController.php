<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\MediaThemeRepositoryInterface;
use Illuminate\Http\Request;

class MediaThemeController extends AbstractController
{
    public function __construct(MediaThemeRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
