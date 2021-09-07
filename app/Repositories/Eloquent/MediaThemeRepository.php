<?php

namespace App\Repositories\Eloquent;

use App\Models\MediaTheme;
use App\Repositories\Contracts\MediaThemeRepositoryInterface;

class MediaThemeRepository extends AbstractRepository implements MediaThemeRepositoryInterface
{
    protected $model = MediaTheme::class;
}
