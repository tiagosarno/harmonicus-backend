<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $primaryKey = "id";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'id_psychologist',
        'id_admin',
        'date',
        'title',
        'body',
        'code_support',
        'notify',
    ];
}
