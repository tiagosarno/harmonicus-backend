<?php

namespace App\Repositories\Eloquent;

use App\Models\Theme;
use App\Repositories\Contracts\ThemeRepositoryInterface;

class ThemeRepository extends AbstractRepository implements ThemeRepositoryInterface
{
    protected $model = Theme::class;
}
