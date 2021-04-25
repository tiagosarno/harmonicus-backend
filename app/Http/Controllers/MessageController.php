<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\MessageRepositoryInterface;
use Illuminate\Http\Request;

class MessageController extends AbstractController
{
    protected $model;

    public function __construct(MessageRepositoryInterface $model)
    {
        parent::__construct($model);
    }

    // Code
}
