<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;




class AllcoursesController extends Controller
{

    public function index(Course $courses){
        // $courses= Course::orderBy('id', 'desc')->get();
        // $courses= Course::orderBy('id','desc')->paginate(6);
       return view('students.allcourses',['courses' => $courses->orderBy('id','desc')->paginate(6)]);
    }


}
