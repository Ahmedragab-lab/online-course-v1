<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;


class MycoursesController extends Controller
{
   public function __constract(){
        $this->middleware('auth');
    }
    public function index(){

        $user= auth()->user();
        $user_courses= $user->course;
        return view('students.mycourses',compact('user_courses'));
    }
}
