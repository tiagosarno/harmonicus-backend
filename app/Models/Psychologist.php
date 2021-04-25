<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psychologist extends Model
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
        'alternative_email',
        'cpf',
        'file_avatar',
        'birth_date',
        'gender',
        'phone',
        'phone_is_whatsapp',
        'crp',
        'crp_state',
        'file_crp',
        'how_find_harmonicus',
        'know_zoom',
        'know_google_meeting',
        'know_microsoft_teams',
        'know_skype',
        'profissional_title',
        'profissional_resume',
        'file_curriculum',
        'file_univertity_degree',
        'lates_url',
        'completed_training_courses',
        'address_state',
        'address_city',
        'address_cep',
        'address_district',
        'address_street',
        'address_number',
        'address_street_addon',
        'business_address_state',
        'business_address_city',
        'business_address_cep',
        'business_address_district',
        'business_address_street',
        'business_address_number',
        'business_address_street_addon'
    ];
}
