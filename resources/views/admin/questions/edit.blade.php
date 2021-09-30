@extends('layouts.master')
@section('css')

@section('title')
    Edit Question
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ ('New Question') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{ ('Question') }}</a></li>
                <li class="breadcrumb-item active">{{ ('New Question') }}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
{{-- SESSION  --}}
<div class="col-12">
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
</div>
{{-- ./SESSION  --}}
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <form method="post" action="{{ route('question.update', $question) }}" autocomplete="off">
                    @csrf
                    @method('PUT')
                    <h6 class="heading-small text-muted mb-4">{{ ('Question Information') }}</h6>

                    <div class="pl-lg-4">
                        {{-- TITLE --}}
                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-title">{{ __('title') }}</label>
                            <input type="text" name="title" id="input-title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('title') }}" value="{{ $question->title }}" required autofocus>

                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        {{-- ./TITLE --}}


                        {{-- ANSWERS --}}
                        <div class="form-group{{ $errors->has('answers') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-answers">{{ __('answers') }}</label>
                            <input type="text" name="answers" id="input-answers" class="form-control form-control-alternative{{ $errors->has('answers') ? ' is-invalid' : '' }}" placeholder="{{ __('answers') }}" value="{{ $question->answers }}" required autofocus>

                            @if ($errors->has('answers'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('answers') }}</strong>
                                </span>
                            @endif
                        </div>
                        {{-- ANSWERS  --}}


                        {{-- RIGHT ANSWERS --}}
                        <div class="form-group{{ $errors->has('right_answer') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-right_answer">{{ __('right_answer') }}</label>
                            <input type="text" name="right_answer" id="input-right_answer" class="form-control form-control-alternative{{ $errors->has('right_answer') ? ' is-invalid' : '' }}" placeholder="{{ __('right_answer') }}" value="{{ $question->right_answer }}" required autofocus>

                            @if ($errors->has('right_answer'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('right_answer') }}</strong>
                                </span>
                            @endif
                        </div>
                        {{-- RIGHT ANSWERS  --}}

                        {{-- SCORE --}}
                        <div class="form-group{{ $errors->has('score') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-score">{{ __('score') }}</label>
                            <input type="text" name="score" id="input-score" class="form-control form-control-alternative{{ $errors->has('score') ? ' is-invalid' : '' }}" placeholder="{{ __('score') }}" value="{{ $question->score }}" required autofocus>

                            @if ($errors->has('score'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('score') }}</strong>
                                </span>
                            @endif
                        </div>
                        {{-- SCORE  --}}

                        {{-- QUIZ --}}
                        <div class="form-group{{ $errors->has('quiz_id') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-course">{{ __('course') }}</label>
                            {{-- <input type="text" name="quiz_id" id="input-course" class="form-control form-control-alternative{{ $errors->has('quiz_id') ? ' is-invalid' : '' }}" placeholder="{{ __('course') }}" value="{{ old('quiz_id') }}" required autofocus> --}}
                            <select class="form-control wolf form-control-alternative{{ $errors->has('quiz_id') ? ' is-invalid' : '' }} form-select " aria-label="Default select example" name="quiz_id">
                                @foreach ($quizzes as $quizze)
                                    <option value="{{ $quizze->id }}" <?php echo $quizze->id ==  $question->quiz->id ? 'selected' : null ?>>{{ $quizze->name }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('quiz_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('quiz_id') }}</strong>
                                </span>
                            @endif
                        </div>
                        {{-- ./QUIZ --}}
                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4">{{ __('edit') }}</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
