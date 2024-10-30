<?php

namespace App\Http\Controllers;

use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $list = Subject::all();
        return view('app.subjects.index', compact('list'));
    }
}
