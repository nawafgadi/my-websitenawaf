<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::post('/', [LandingController::class, 'store'])->name('landing.store');

use App\Http\Controllers\Admin\SettingsController;

use App\Http\Controllers\Admin\PtsScoreController;
use App\Http\Controllers\Admin\SchoolClassController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('students', StudentController::class);
    Route::get('/students/kelas', [StudentController::class, 'kelas'])->name('students.kelas');
    Route::resource('classes', SchoolClassController::class);
    Route::resource('pts_scores', PtsScoreController::class);
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
});
