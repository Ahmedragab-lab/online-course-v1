@extends('layoutsuser.unilearn')
@section('title' , 'my courses')
@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>{{ auth()->user()->name }} courses page</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
{{-- slide course  --}}
<div id="fh5co-blog " class="blog-course">
    <div class="container ">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Your Courses</h2>
                {{-- <p>Famous topic for you</p> --}}
            </div>
        </div>
        <div class="row">
            @if (count($user_courses))
                @foreach($user_courses as $course)
                    <div class="col-lg-4 col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="/course/{{ $course->slug }}"><img class="img-responsive" src="code30/images/{{ $course->photo->filename }}" alt=""></a>
                            <div class="blog-text">
                                <h2><a href="/course/{{ $course->slug }}">{{ $course->title }}</a></h2>
                                <h3><a href="#">{{ $course->track->name}}</a></h3>
                                <span class="posted_on">{{ $course->created_at->diffForHumans()}}</span>
                                <span class="comment">
                                    <a href="#">{{ (count(auth()->user()->course()->where('slug',$course->slug)->get())) }} User
                                        <i class="icon-speech-bubble"></i>
                                    </a>
                                </span>
                                <p>{{ \Str::limit($course->description,35) }}</p>
                                <a href="/course/{{ $course->slug }}" class="btn btn-primary ">Go TO Course Page</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-danger text-center">No Enrolled Course Yet</div>
            @endif
        </div>

    </div>
</div>
{{-- end slide course  --}}
@endsection
