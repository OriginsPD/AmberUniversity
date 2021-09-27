<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
      'course_name',
      'course_type_id'
    ];

    public function typeOfCourse() {
        return $this->belongsTo(TypesOfCourse::class,"course_type_id","id");
    }

    public function student_selection(){
        return $this->hasOne(StudentSelection::class,"course_id","id")->with("user");
    }
}
