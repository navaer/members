<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'member_id',
        'skill',
        'formal_training'
    ];
}
