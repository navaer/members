<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable =[
        'name',
        'lastname',
        'lastname2',
        'email',
        'phone',
        'mobile'
    ];

    public function jobs(){
       return $this->hasOne(CurrentJob::class);
    }

    public function education(){
        return $this->hasOne(Education::class);
    }

    public function employment(){
        return $this->hasOne(EmploymentContribution::class);
    }

    public function personal(){
        return $this->hasOne(PersonalContribution::class);
    }

    public function professional(){
        return $this->hasOne(ProfessionalNeed::class);
    }

    public function skills(){
        return $this->hasOne(Skill::class);
    }

    public function workshops(){
        return $this->hasOne(Workshop::class);
    }


}
