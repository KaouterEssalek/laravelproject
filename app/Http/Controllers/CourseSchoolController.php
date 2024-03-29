<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseSchool;

class CourseSchoolController extends Controller
{
    public function index()
    {
        $courseSchools = CourseSchool::all();
        return view('course_schools.index', compact('courseSchools'));
    }

    public function create()
    {
        return view('course_schools.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,idCourse',
            'school_id' => 'required|exists:schools,idSchool',
        ]);

        CourseSchool::create($request->all());

        return redirect()->route('course_schools.index')
            ->with('success', 'CourseSchool created successfully.');
    }

    public function show($id)
    {
        $courseSchool = CourseSchool::findOrFail($id);
        return view('course_schools.show', compact('courseSchool'));
    }

    public function edit($id)
    {
        $courseSchool = CourseSchool::findOrFail($id);
        return view('course_schools.edit', compact('courseSchool'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,idCourse',
            'school_id' => 'required|exists:schools,idSchool',
        ]);

        $courseSchool = CourseSchool::findOrFail($id);
        $courseSchool->update($request->all());

        return redirect()->route('course_schools.index')
            ->with('success', 'CourseSchool updated successfully.');
    }

    public function destroy($id)
    {
        $courseSchool = CourseSchool::findOrFail($id);
        $courseSchool->delete();

        return redirect()->route('course_schools.index')
            ->with('success', 'CourseSchool deleted successfully.');
    }
}
