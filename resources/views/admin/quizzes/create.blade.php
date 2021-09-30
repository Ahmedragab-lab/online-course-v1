@extends('layouts.master')
@section('css')

@section('title')
    Add Quiz
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ ('New Quiz') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{ ('Quiz') }}</a></li>
                <li class="breadcrumb-item active">{{ ('New Quiz') }}</li>
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
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <form method="post" action="{{ route('quiz.store') }}" autocomplete="off">
                    @csrf

                    <h6 class="heading-small text-muted mb-4">{{ ('Quiz Information') }}</h6>
                    <div class="pl-lg-4">
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-name">{{ ('name') }}</label>
                            <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ ('name') }}" value="{{ old('name') }}" required autofocus>

                            {{-- MESSAGE ERROR --}}
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            {{-- ./ MESSAGE ERROR --}}

                        </div>
                        {{-- COURSE --}}
                        <div class="form-group{{ $errors->has('course_id') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-course">{{ __('course') }}</label>
                            <select class="form-control wolf form-control-alternative{{ $errors->has('course_id') ? ' is-invalid' : '' }} form-select " aria-label="Default select example" name="course_id">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('course_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('course_id') }}</strong>
                                </span>
                            @endif
                        </div>
                        {{-- ./COURSE --}}

                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4">{{ ('Add') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
