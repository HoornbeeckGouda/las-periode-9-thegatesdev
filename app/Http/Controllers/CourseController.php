<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $list = Course::withCount(['subjects'])->get();
        return view('app.courses.index', compact('list'));
    }

    public function table()
    {
        return $this->index()->fragment('table');
    }
}
