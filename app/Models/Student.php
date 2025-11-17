<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'nama_lengkap',
        'jenis_kelamin',
        'nisn',
        'email_orangtua',
        'telepon_orangtua',
        'asal_sekolah',
        'pilihan_jenjang',
        'class_id',
    ];

    public function ptsScores()
    {
        return $this->hasMany(PtsScore::class);
    }

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }
}