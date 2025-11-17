<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email_orangtua' => 'required|email',
            'telepon_orangtua' => 'required|string|max:20',
            'asal_sekolah' => 'required|string|max:255',
            'pilihan_jenjang' => 'required|in:RPL,PG,TKJ,TJA',
        ]);

        Student::create($request->all());

        return redirect()->back()->with('success', 'Pendaftaran PPDB berhasil! Data telah disimpan ke sistem manajemen siswa.');
    }
}
