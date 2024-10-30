<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class GradeController extends Controller
{
    public function index()
    {
        $list = Grade::all();
        return view('app.grades.index', compact('list'));
    }
}
