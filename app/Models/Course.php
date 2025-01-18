<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'courses';

    public function students()
    {
        return $this->hasMany(Student::class, 'course_id');
    }

    // public function students()
    // {
    //     return $this->belongsToMany(Student::class, 'course_student', 'course_id', 'student_id')
    //                 ->withPivot('batch', 'created_at');
    // }
}
