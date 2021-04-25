<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status',
        'name',
        'email',
        'cpf',
        'file_avatar',
        'birth_date',
        'file_authorization_term',
        'file_responsible_cpf',
        'phone',
        'phone_is_whatsapp',
        'how_find_harmonicus',
        'know_zoom',
        'know_google_meeting',
        'know_microsoft_teams',
        'know_skype',
        'address_state',
        'address_city',
        'address_district',
        'address_street'
    ];
}
