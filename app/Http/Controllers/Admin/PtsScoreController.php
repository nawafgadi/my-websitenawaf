<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PtsScore;
use App\Models\Student;
use Illuminate\Http\Request;

class PtsScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ptsScores = PtsScore::with('student')->get();
        return view('admin.pts_scores.index', compact('ptsScores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        return view('admin.pts_scores.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'mata_pelajaran' => 'required|string|max:255',
            'nilai' => 'required|numeric|min:0|max:100',
            'semester' => 'required|string|max:255',
            'tahun_ajaran' => 'required|integer|min:2000|max:' . (date('Y') + 1),
        ]);

        PtsScore::create($request->all());
        return redirect()->route('admin.pts_scores.index')->with('success', 'PTS Score berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PtsScore $ptsScore)
    {
        return view('admin.pts_scores.show', compact('ptsScore'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PtsScore $ptsScore)
    {
        $students = Student::all();
        return view('admin.pts_scores.edit', compact('ptsScore', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PtsScore $ptsScore)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'mata_pelajaran' => 'required|string|max:255',
            'nilai' => 'required|numeric|min:0|max:100',
            'semester' => 'required|string|max:255',
            'tahun_ajaran' => 'required|integer|min:2000|max:' . (date('Y') + 1),
        ]);

        $ptsScore->update($request->all());
        return redirect()->route('admin.pts_scores.index')->with('success', 'PTS Score berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PtsScore $ptsScore)
    {
        $ptsScore->delete();
        return redirect()->route('admin.pts_scores.index')->with('success', 'PTS Score berhasil dihapus!');
    }
}
