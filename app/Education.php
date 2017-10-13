<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'member_id',
        'language_1',
        'language_1_reed',
        'language_1_speak',
        'language_1_translate',
        'language_1_write',
        'language_2',
        'language_2_reed',
        'language_2_speak',
        'language_2_translate',
        'language_2_write',
        'grade',
        'grade_type',
        'applied_skills',
        'it_knowledge',
        'free_academic_institutions',
    ];
}
