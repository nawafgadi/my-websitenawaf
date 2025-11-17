@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-800">Detail PTS Score</h2>
        </div>
        <div class="px-6 py-4">
            <div class="mb-4">
                <strong class="block text-gray-700 text-sm font-bold mb-2">ID:</strong>
                <p class="text-gray-900">{{ $ptsScore->id }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700 text-sm font-bold mb-2">Nama Siswa:</strong>
                <p class="text-gray-900">{{ $ptsScore->student->nama_lengkap }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700 text-sm font-bold mb-2">Mata Pelajaran:</strong>
                <p class="text-gray-900">{{ $ptsScore->mata_pelajaran }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700 text-sm font-bold mb-2">Nilai:</strong>
                <p class="text-gray-900">{{ $ptsScore->nilai }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700 text-sm font-bold mb-2">Semester:</strong>
                <p class="text-gray-900">{{ $ptsScore->semester }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700 text-sm font-bold mb-2">Tahun Ajaran:</strong>
                <p class="text-gray-900">{{ $ptsScore->tahun_ajaran }}</p>
            </div>

            <div class="flex items-center justify-between">
                <a href="{{ route('admin.pts_scores.edit', $ptsScore) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Edit
                </a>
                <a href="{{ route('admin.pts_scores.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
