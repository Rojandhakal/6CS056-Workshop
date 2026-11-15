<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
        // Display all courses
    public function index()
    {
        $courses = Course::all();

        return view('course.list', compact('courses'));
    }
    // Display course registration form
    public function create()
    {
        return view('course.create');
    }
    // Display the edit form
    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('course.edit', compact('course'));
    }
    // Update course information
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'required|integer|min:1',
            'fee' => 'required|numeric|min:0',
            'difficulty' => 'required|in:Easy,Medium,Hard',
            'is_active' => 'required|boolean',
        ]);

        $course->update($validated);

        return redirect('/courses')
            ->with('success', 'Course updated successfully!');
    }
    // Delete a course
    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        $course->delete();

        return redirect('/courses')
            ->with('success', 'Course deleted successfully!');
    }
    // Store a new course
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'required|integer|min:1',
            'fee' => 'required|numeric|min:0',
            'difficulty' => 'required|in:Easy,Medium,Hard',
            'is_active' => 'required|boolean',
        ]);

        Course::create($validated);

        return redirect('/courses/create')
            ->with('success', 'Course created successfully!');
    }
}