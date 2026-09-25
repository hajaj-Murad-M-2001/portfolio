<?php

namespace App\Http\Controllers;

use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::ordered()->get();

        return view('Experience', compact('experiences'));
    }
}