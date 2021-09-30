<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuizAddRequest;
use App\Http\Requests\QuizUpdatedRequest;
use App\Models\Course;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Quiz $quizzes)
    {
        //
        return view('admin.quizzes.index', ['quizzes'=> $quizzes->orderBy('id', 'desc')->paginate(10)]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $courses = Course::orderBy('id', 'desc')->get(); # THINK IF IT EMPTY HOW TO SOLVE IT TO IGNORE
        return view("admin.quizzes.create", compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuizAddRequest $request, Quiz $quiz)
    {
        //
        $data = $request->validated();
        $quiz->create($data);
        return redirect()->route('quiz.create')->withStatus(__('Quiz Successfully Created.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
        $questions = $quiz->question()->orderBy('id', 'desc')->get();
        return view('admin.quizzes.show', compact('quiz', 'questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        //
        $courses = Course::orderBy('id', 'desc')->get(); # THINK IF IT EMPTY HOW TO SOLVE IT TO IGNORE
        return view('admin.quizzes.edit', compact('courses', 'quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(QuizUpdatedRequest $request, Quiz $quiz)
    {
        //
        $data = $request->validated();
        $quiz->update($data);
        return redirect()->route('quiz.edit', $quiz)->withStatus(__('Quiz Successfully Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect()->route('quiz.index')->withStatus(__('Quiz Successfully Deleted'));
    }
}
