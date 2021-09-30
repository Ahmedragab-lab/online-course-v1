@extends('layouts.master')
@section('css')

@section('title')
    update video
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> update Video information</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Video</a></li>
                <li class="breadcrumb-item active">Update Video</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <form method="post" action="{{ route('video.update', $video) }}" autocomplete="off">
                    @csrf
                    @method('PATCH')
                    <h6 class="heading-small text-muted mb-4">{{ __('Video information') }}</h6>
                    <div class="pl-lg-4">
                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-title">{{ __('Video Title') }}</label>
                            <input type="text" name="title" id="input-title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Title') }}" value="{{ $video->title }}" required autofocus>

                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('link') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-link">{{ __('Video Link') }}</label>
                            <input type="text" name="link" id="input-link" class="form-control form-control-alternative{{ $errors->has('link') ? ' is-invalid' : '' }}" placeholder="{{ __('Link') }}" value="{{ $video->link }}" required>

                            @if ($errors->has('link'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('link') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('course_id') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-course_id">{{ __('Course Title') }}</label>
                            
                            <select name="course_id" required class="form-control wolf">
                                @foreach(\App\Models\Course::orderBy('id', 'desc')->get() as $course)
                                <option <?php if($video->course->id == $course->id) echo 'selected'; ?> value="{{ $course->id }}">{{ \Str::limit($course->title, 30) }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('course_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('course_id') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4">{{ __('Update') }}</button>
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
