<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('schools.index', compact('schools'));
    }

    public function create()
    {
        return view('schools.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
        ]);

        School::create($request->all());

        return redirect()->route('schools.index')
            ->with('success', 'School created successfully.');
    }

    public function show($id)
    {
        $school = School::findOrFail($id);
        return view('schools.show', compact('school'));
    }

    public function edit($id)
    {
        $school = School::findOrFail($id);
        return view('schools.edit', compact('school'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
        ]);

        $school = School::findOrFail($id);
        $school->update($request->all());

        return redirect()->route('schools.index')
            ->with('success', 'School updated successfully.');
    }

    public function destroy($id)
    {
        $school = School::findOrFail($id);
        $school->delete();

        return redirect()->route('schools.index')
            ->with('success', 'School deleted successfully.');
    }
}
