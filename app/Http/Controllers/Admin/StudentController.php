<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
{
    $students = Student::all();
    return view('admin.students.index', compact('students'));
}




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = \App\Models\SchoolClass::all();
        return view('admin.student.create', compact('classes'));
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:students',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'nisn' => 'required|unique:students',
            'class_id' => 'nullable|exists:classes,id',
        ]);

        Student::create($request->all());
        return redirect()->route('admin.students.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('admin.student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $classes = \App\Models\SchoolClass::all();
        return view('admin.student.edit', compact('student', 'classes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        // Validasi input
        $validated = $request->validate([
            'nis'            => 'required',
            'nama_lengkap'   => 'required',
            'jenis_kelamin'  => 'required',
            'nisn'           => 'required',
            'class_id'       => 'nullable|exists:classes,id',
        ]);

        // Update data siswa
        $student->update($validated);

        // Redirect dengan pesan sukses
        return redirect()
            ->route('admin.students.index')
            ->with('success', 'Data siswa berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('admin.students.index')->with('success', 'Student deleted successfully.');
    }

    /**
     * Display a listing of classes with student counts.
     */
    public function kelas()
    {
        $classes = \App\Models\SchoolClass::withCount('students')->get();
        return view('admin.students.kelas', compact('classes'));
    }
}
