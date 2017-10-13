<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrentJob extends Model
{
    protected $fillable = [
        'member_id',
        'position',
        'responsibilities',
        'company',
        'job_phone',
        'job_city',
    ];
}
