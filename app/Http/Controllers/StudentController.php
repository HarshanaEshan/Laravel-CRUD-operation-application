<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('components.index', compact('students'));
    }

    public function create()
    {
        return view('components.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'age' => 'nullable|integer',
            'status' => 'required|boolean',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Student::create([
            'name' => $request->name,
            'image' => $imagePath,
            'age' => $request->age,
            'status' => $request->status,
        ]);

        return redirect()->route('index')->with('success', 'Student created successfully.');
    }

    public function show(Student $student)
    {
        return view('components.read', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('components.update', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'age' => 'nullable|integer',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($student->image) {
                Storage::disk('public')->delete($student->image);
            }
            $student->image = $request->file('image')->store('images', 'public');
        }

        $student->update([
            'name' => $request->name,
            'age' => $request->age,
            'status' => $request->status,
        ]);

        return redirect()->route('edit')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        if ($student->image) {
            Storage::disk('public')->delete($student->image);
        }
        $student->delete();
        return redirect()->route('index')->with('danger', 'Student deleted successfully.');
    }
}
