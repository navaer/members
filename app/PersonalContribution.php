<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalContribution extends Model
{
    protected $fillable = [
      'member_id',
      'job_reference',
      'fill_forms',
      'teach_workshops',
      'educational_resources',
      'interview_practices',
      'teach_it',
      'career_coach',
      'babysitting',
      'fill_resume',
      'professional_advisement',
      'pef_coach',
      'transportation',
      'others'

    ];
}
