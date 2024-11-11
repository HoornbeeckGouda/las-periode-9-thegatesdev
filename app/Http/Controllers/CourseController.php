<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::withCount(['subjects'])->with('subjects')->get();
        return view('app.courses.index', compact('courses'));
    }

    public function show(string $id)
    {
        $course = Course::withCount(['subjects', 'careerUsers'])->with('subjects')->findOrFail($id);
        return view('app.courses.show', compact('course'));
    }

    public function create()
    {
        $course = Course::create([
            'name' => 'Nieuwe Opleiding',
            'prefix' => 'VL',
        ]);
        return view('app.courses.edit', compact('course'));
    }

    public function edit(string $id)
    {
        $course = Course::withCount(['subjects', 'careerUsers'])->with('subjects')->findOrFail($id);
        return view("app.courses.edit", compact('course'));
    }

    public function update(Request $request, string $id)
    {
        $course = Course::findOrFail($id);
        $course->updateOrFail($request->all());
        return redirect(route('app.courses.index'));
    }

    public function destroy(string $id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect(route('app.courses.index'));
    }

    public function table()
    {
        return $this->index()->fragment('table');
    }
}
