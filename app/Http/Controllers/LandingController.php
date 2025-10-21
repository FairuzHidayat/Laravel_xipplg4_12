<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class LandingController extends LandingController
{
    public function index ()
    {
        return view ('admin.dashboard');
    }   
}
