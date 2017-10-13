<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmploymentContribution extends Model
{
    protected $fillable = [
        'member_id',
        'employment_information',
        'accounting',
        'agriculture_administration',
        'media',
        'babysitting',
        'construction',
        'training',
        'architecture',
        'medical',
        'restaurant',
        'human_resources',
        'IT',
        'facility_maintenance',
        'business_management',
        'factory',
        'government',
        'sales',
        'science',
        'self_employment',
        'transportation',
    ];
}
