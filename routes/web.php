<?php
define("OWNER", "ahmedragabyasin2020@gmail.com");          #OWNER THE PAGE
define("PROGRAMMER", "mohamed@gmail.com");  #PROGRAMMER PAGE
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Student;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// GUEST
route::get('/',[HomeController::class,'index']);
// ./GUEST

// STUDENT
Auth::routes();
route::get('/home',[HomeController::class,'index'])->name('home.student');
route::get('/allcourses',[Student\AllcoursesController::class,'index'])->name('courses');
route::get('/course/{slug}',[Student\CoursesController::class,'index'])->name('show.course');
route::post('/course/{slug}',[Student\CoursesController::class,'enroll'])->name('enrole.course');
route::get('/mycourses',[Student\MycoursesController::class,'index'])->name('my.courses');
Route::view('contact', 'contact');
// Route::view('profile', 'students/profile');
route::get('/profile',[Student\ProfileController::class,'index'])->name('show-profile');
route::put('/profile',[Student\ProfileController::class,'update'])->name('edit-profile');
route::put('/profile-photo',[Student\ProfileController::class,'profilephoto'])->name('edit.profile.photo');
// STUDENT

// DASHBOARD
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth','admin']
    ], function(){

        Route::get('/dashboard', [Admin\HomeController::class, 'index'])->name('dashboard');
        Route::resource('/admin', Admin\AdminController::class)->middleware('owner');   // OWNER ONLY $$ PROGRAMMER
        Route::resource('/user', Admin\UserController::class);
        Route::resource('/track', Admin\TrackController::class);
        Route::resource('/course', Admin\CourseController::class);
        Route::resource('/video', Admin\VideoController::class);
        Route::resource('/quiz', Admin\QuizController::class);
        // QUESTION
        Route::resource('/question', Admin\QuestionController::class);
        // ./QUESTION
    });
// ./DASHBOARD

// LOGOUT
Route::get('/logout',function(){
	if(Auth::check()){
		Auth::logout();
		return redirect('/home');
	}else{
		return redirect('/');
	}
})->name('logout');
// ./LOGOUT
