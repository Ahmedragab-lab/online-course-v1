<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Models\video;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class HomeController extends Controller
{
    public function index(Course $courses, User $users, video $videos){

        // $courses = $courses->orderBy('id', 'desc')->limit(6)->get();
        // return view('unimaster',compact('courses'));
        // return view('school',compact('courses'));
        return view('students.home', [
            'courses'       => $courses->orderBy('id', 'desc')->limit(6)->get(),
            'countUsers'    => $users->whereAdmin(0)->count(),
            'countCourses'  => $courses->count(),
            'countVides'    => $videos->count(),
            "countAdmins"   => $users->whereAdmin(1)->count()
        ]);
        // return $courses;
    }
}
