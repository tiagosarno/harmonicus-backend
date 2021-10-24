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
        'id',
        'created_at',
        'updated_at',
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
        'professional_title',
        'professional_resume',
        'courses',
        'academic_level',
        'academic_formation',
        'lates_url',
        'website_url',
        'instagram_url',
        'address_cep',
        'address_state',
        'address_city',
        'address_district',
        'address_street',
        'address_street_addon',
        'address_number',
        'harmonicus_page',
        'created_at',
        'updated_at'
    ];
}
