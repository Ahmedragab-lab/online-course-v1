<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionAddRequest;
use App\Http\Requests\QuestionUpdateRequest;
use App\Models\Quiz;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Question $questions)
    {
        //
        return view('admin.questions.index', ['questions' => $questions->orderBy('id', 'desc')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET ALL QUIZZES BY DESC TO CHOOOSE THE QUIZ DOCTOR WANT
        $quizzes = Quiz::orderBy('id', 'desc')->get(); #THINK IF IT EMPTY HOW TO SOLVE IT TO IGNORE
        return view('admin.questions.create', compact('quizzes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionAddRequest $request, Question $question)
    {
        //
        $data = $request->validated();
        // dd($data);
        $question->create($data);
        return redirect()->route('question.create')->withStatus(__('Questions Successfully Created.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
        $quizzes = Quiz::orderBy('id', 'desc')->get(); #THINK IF IT EMPTY HOW TO SOLVE IT TO IGNORE
        return view("admin.questions.edit", compact('question', 'quizzes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionUpdateRequest $request, Question $question)
    {
        //
        $data = $request->validated();
        $question->update($data);
        return redirect()->route('question.edit', $question)->withStatus(__('Question Successfully Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
        $question->delete();
        return redirect()->route('question.index')->withStatus(__('Question Successfully Deleted'));
    }
}
