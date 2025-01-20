<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');  // foreign key is 'course_id'
    }

    // public function courses()
    // {
    //     return $this->belongsToMany(Course::class, 'course_student', 'student_id', 'course_id')
    //                 ->withPivot('batch', 'created_at');
    // }

    public function payment()
    {
        return $this->hasOne(Payment::class); // Assuming one student has one payment
    }

}
