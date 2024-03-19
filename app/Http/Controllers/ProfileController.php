<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Teacher;

class ProfileController extends Controller
{
    public function teacher(Teacher $teacher)
    {
        return view('profile.teacher')->with(['teachers' => $teacher->get()]);
    }
    public function index(Profile $profile)
    {
        return $profile->get();
    }
}
