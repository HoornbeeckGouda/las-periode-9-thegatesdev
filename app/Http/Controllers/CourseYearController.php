<?php

namespace App\Http\Controllers;

use App\Models\CourseYear;

class CourseYearController extends Controller
{
    public function index()
    {
        $list = CourseYear::all();
        return view('app.courseyears.index', compact('list'));
    }
}
