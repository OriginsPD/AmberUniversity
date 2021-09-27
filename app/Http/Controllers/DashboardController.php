<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudentSelection;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $courses = StudentSelection::where("student_selections.user_id","=",Auth::id())->with(["user","course"])->get()->toArray();

//        dd($courses);
        return view("auth.dashboard",compact("courses"));

    }
}
