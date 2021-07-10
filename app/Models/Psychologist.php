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
     *
     */
    protected $fillable = [
        'status',
        'terms_agree',
        'file_avatar',
        'file_crp',
        'file_cripf',
        'file_proof_of_residence',
        'file_rg_cpf',
        'name',
        'gender',
        'email',
        'cpf',
        'birth_date',
        'phone',
        'phone_is_whatsapp',
        'crp',
        'crp_state',
        'profissional_title',
        'profissional_resume',
        'completed_training_courses',
        'academic_level',
        'academic_formation',
        'lates_url',
        'website_url',
        'instagram_url',
        'address_cep',
        'know_google_meeting',
        'address_state',
        'address_city',
        'address_district',
        'address_street',
        'address_street_addon',
        'address_number',
        'created_at',
        'updated_at'
    ];
}
