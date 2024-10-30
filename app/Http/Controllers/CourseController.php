<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $list = Course::all();
        return view('app.courses.index', compact('list'));
    }
}
