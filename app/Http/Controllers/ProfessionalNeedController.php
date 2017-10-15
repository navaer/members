<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessionalNeedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
