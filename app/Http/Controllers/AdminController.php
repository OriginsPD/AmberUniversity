<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudentSelection;
use App\Models\TypesOfCourse;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $studentCount = User::count();
        $courseCount = Course::count();
        $applicationCount = StudentSelection::count();


        $courseTypes = TypesOfCourse::all()->toArray();
        $courses = Course::all()->toArray();
        $applicants = StudentSelection::with(["user","course"])->where("is_approved","=",0)->get()->toArray();
//        dd($courses);
//        dd($applicants);
        return view('admin.index',compact("courseTypes","courses","applicants","studentCount","courseCount","applicationCount"));
    }

    public function addCourse(Request $request) {
//        dd($request->all());
        Course::create([
           'course_name' => $request->course_nm,
            'course_type_id' => $request->course_type
        ]);
        return back();


    }

    public function addCourseCategory(Request $request) {

//                dd($request->all());

        TypesOfCourse::create([
            'course_type' => $request->course_type,
            'desc' => $request->description
        ]);

        return back();
    }

    public function applicantAction(Request $request,$id){

        if ($request->has("accept")) {

            StudentSelection::find($id)->update([
                'is_approved' => $request->accept
            ]);
        }
        elseif ($request->has("reject")) {

            StudentSelection::find($id)->update([
                'is_approved' => $request->reject
            ]);
        }
        return back()->with("message","Action Executed Successfully");
    }

}
