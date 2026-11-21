<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    // Display the student registration form
    public function create()
    {
        $student = new Student();

        return view('student.create', compact('student'));
    }
        // Display one student
    public function show(Student $student)
    {
        return view('student.detail', compact('student'));
    }

    // Display all students
    public function index()
    {
        $students = Student::all();

        return view('student.list', compact('students'));
    }

    // Store a new student
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        Student::create($validated);

        return redirect()->route('students.index')
            ->with('success', 'Student registered successfully!');
    }

    // Display the edit form
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    // Update student information
    public function update(Request $request, Student $student)
    {

        $validated = $request->validate($this->rules($student));

        $student->update($validated);

        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully!');
    }

    // Delete a student
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully!');
    }
    private function rules(?Student $student = null): array
{
    return [
        'name' => 'required|string|max:255',
        'email' => [
            'required',
            'email',
            'max:255',
            Rule::unique('students')->ignore($student?->id),
        ],
        'phone' => 'required|string|max:20',
        'address' => 'nullable|string|max:500',
        'date_of_birth' => 'nullable|date',
    ];
}
}
