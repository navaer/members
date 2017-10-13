<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessionalNeed extends Model
{
    protected $fillable = [
        'member_id',
        'employment_search',
        'increase_payment',
        'environment',
        'not_satisfied',
        'improve_education',
        'cv_training',
        'start_business',
        'improve_business',
        'new_skills',
        'job_loss'
    ];
}
