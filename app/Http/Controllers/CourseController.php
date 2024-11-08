<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\Cache;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Cache::remember('courses_with_count', 120, function () {
            return Course::withCount(['subjects'])->get();
        });
        return view('app.courses.index', compact('courses'));
    }

    public function show(string $id)
    {
        $course = Cache::remember("course_$id", 120, function () use ($id) {
            return Course::findOrFail($id);
        });
        return view('app.courses.show', compact('course'));
    }

    public function table()
    {
        return $this->index()->fragment('table');
    }
}
