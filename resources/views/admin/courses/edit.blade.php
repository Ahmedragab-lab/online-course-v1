@extends('layouts.master')
@section('css')

@section('title')
    update course
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> update course information</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Course</a></li>
                <li class="breadcrumb-item active">Update Course</li>
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
                <form method="post" action="{{ route('course.update', $course) }}" enctype="multipart/form-data" autocomplete="off" >
                    @csrf
                    @method('PATCH')

                    <h6 class="heading-small text-muted mb-4">{{ __('Course information') }}</h6>
                    <div class="pl-lg-4">
                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-title">{{ __('Title') }}</label>
                            <input type="text" name="title" id="input-title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Title') }}" value="{{ $course->title }}" required autofocus>

                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-description">{{ __('Description') }}</label>
                            <input type="text" name="description" id="input-description" class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('description') }}" value="{{ $course->description }}" required autofocus>

                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('link') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-link">{{ __('Link') }}</label>
                            <input type="text" name="link" id="input-link" class="form-control form-control-alternative{{ $errors->has('link') ? ' is-invalid' : '' }}" placeholder="{{ __('Link') }}" value="{{ $course->link }}" required>

                            @if ($errors->has('link'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('link') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-status">{{ __('Status') }}</label>

                            <select name="status" required class="form-control wolf">
                                <option value="0" <?php if($course->status == '0') echo 'selected'; ?> >FREE</option>
                                <option value="1" <?php if($course->status == '1') echo 'selected'; ?> >PAID</option>
                            </select>

                            @if ($errors->has('status'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('track_id') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-track_id">{{ __('Track') }}</label>

                            <select name="track_id" required class="form-control wolf">
                                @foreach(\App\Models\Track::all() as $track)
                                <option <?php if($course->track->id == $track->id) echo 'selected'; ?> value="{{ $track->id }}">{{ $track->name }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('track_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('track_id') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-image">{{ __('Image') }}</label>
                            <input type="file" name="image" id="input-image" class="form-control form-control-alternative{{ $errors->has('image') ? ' is-invalid' : '' }}">

                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
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
