<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TeacherController extends Controller
{
    public function index(Teacher $teacher)
    {
        return view('profile.teacher')->with(['teachers' => $teacher->get()]);
    }
}
