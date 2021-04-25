<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\WalletRepositoryInterface;
use Illuminate\Http\Request;

class WalletController extends AbstractController
{
    public function __construct(WalletRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
