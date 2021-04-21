<?php

namespace App\Repositories\Eloquent;

use App\Models\Message;
use App\Repositories\Contracts\MessageRepositoryInterface;

class MessageRepository extends AbstractRepository implements MessageRepositoryInterface
{
    protected $model = Message::class;
}
