@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Detail Kelas</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <h2 class="text-lg font-semibold text-gray-700 mb-2">Nama Kelas</h2>
                <p class="text-gray-900">{{ $class->nama_kelas }}</p>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-gray-700 mb-2">Tingkat</h2>
                <p class="text-gray-900">{{ $class->tingkat ?? '-' }}</p>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-gray-700 mb-2">Jurusan</h2>
                <p class="text-gray-900">{{ $class->jurusan ?? '-' }}</p>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-gray-700 mb-2">Kapasitas</h2>
                <p class="text-gray-900">{{ $class->kapasitas }}</p>
            </div>
        </div>

        <div class="mt-6">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Siswa di Kelas Ini</h2>
            @if($class->students->count() > 0)
                <ul class="list-disc list-inside">
                    @foreach($class->students as $student)
                        <li><a href="{{ route('admin.students.show', $student) }}" class="text-blue-600 hover:text-blue-800">{{ $student->nama_lengkap }}</a></li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500">Belum ada siswa yang ditugaskan ke kelas ini.</p>
            @endif
        </div>

        <div class="mt-6 flex space-x-4">
            <a href="{{ route('admin.classes.edit', $class) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                Edit
            </a>
            <a href="{{ route('admin.classes.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection
