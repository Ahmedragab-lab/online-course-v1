<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;




class CoursesController extends Controller
{
    public function __constract(){
        $this->middleware('auth');
    }
    public function index($slug){
        $course = Course::where('slug',$slug)->first();
        return view('students.course',compact('course'));
    }

    public function enroll($slug, Course $course){


        $course = $course->whereSlug($slug)->get()->first();
        // $course = Course::where('slug',$slug)->first();
        $user   = auth()->user();
        $user->course()->attach([$course->id]);
        return redirect(route('show.course', $course->slug));
        // return $course->slug;

    }
}
