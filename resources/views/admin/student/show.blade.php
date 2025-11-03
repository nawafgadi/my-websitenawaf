@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header Section -->
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 px-6 py-4">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold text-white">Detail Siswa</h1>
                    <p class="text-blue-100 mt-1">Informasi lengkap siswa</p>
                </div>
                <a href="{{ route('admin.students.index') }}" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-50 transition duration-200 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali
                </a>
            </div>
        </div>

        <!-- Student Details -->
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Student Info Card -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Siswa</h3>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center">
                                    <span class="text-sm font-medium text-white">{{ substr($student->nama_lengkap, 0, 1) }}</span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-600">Nama Lengkap</p>
                                <p class="text-lg font-semibold text-gray-900">{{ $student->nama_lengkap }}</p>
                            </div>
                        </div>

                        <div>
                            <p class="text-sm font-medium text-gray-600">NIS</p>
                            <p class="text-lg text-gray-900">{{ $student->nis }}</p>
                        </div>

                        <div>
                            <p class="text-sm font-medium text-gray-600">NISN</p>
                            <p class="text-lg text-gray-900">{{ $student->nisn }}</p>
                        </div>

                        <div>
                            <p class="text-sm font-medium text-gray-600">Jenis Kelamin</p>
                            <p class="text-lg text-gray-900">{{ $student->jenis_kelamin }}</p>
                        </div>
                    </div>
                </div>

                <!-- Additional Info Card -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Tambahan</h3>
                    <div class="space-y-3">
                        <div>
                            <p class="text-sm font-medium text-gray-600">ID Siswa</p>
                            <p class="text-lg text-gray-900">#{{ $student->id }}</p>
                        </div>

                        <div>
                            <p class="text-sm font-medium text-gray-600">Dibuat Pada</p>
                            <p class="text-lg text-gray-900">{{ $student->created_at->format('d M Y, H:i') }}</p>
                        </div>

                        <div>
                            <p class="text-sm font-medium text-gray-600">Terakhir Diupdate</p>
                            <p class="text-lg text-gray-900">{{ $student->updated_at->format('d M Y, H:i') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-8 flex justify-end space-x-4">
                <a href="{{ route('admin.students.edit', $student->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-yellow-600 transition duration-200 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    Edit Siswa
                </a>

                <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah kamu yakin ingin menghapus data siswa ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-600 transition duration-200 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                        Hapus Siswa
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
