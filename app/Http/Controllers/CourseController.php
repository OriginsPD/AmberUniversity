<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudentSelection;
use App\Models\TypesOfCourse;
use Auth;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {

        $courses = Course::with(["student_selection","typeOfCourse"])->get()->toArray();

        return view("auth.courseSelection",compact("courses"));
    }

    public function apply(Request $request,$id) {

        StudentSelection::create([
           "user_id" => Auth::id(),
            "course_id" => $id,
            "enroll_dt" => now("Jamaica")
        ]);

        return back();

    }
}
