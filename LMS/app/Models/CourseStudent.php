<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    use HasFactory;
    protected  $table  ="course_students";
    protected $guarded=[
        ];

    public function course()
    {
        return $this->hasMany(Course::class);
    }
    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
