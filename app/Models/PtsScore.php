<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PtsScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'mata_pelajaran',
        'nilai',
        'semester',
        'tahun_ajaran',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
