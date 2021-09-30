@extends('layoutsuser.unilearn')
@section('content')
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Courses Page</h1>
							{{-- <h2></h2> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Recent Courses</h2>
                    {{-- <p>important courses for you.</p> --}}
                </div>
            </div>
            <div class="row">
                @foreach($courses as $course)
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="/course/{{ $course->slug }}"><img class="img-responsive" src="code30/images/{{ $course->photo->filename }}" alt=""></a>
                        <div class="blog-text">
                            <h2><a href="{{ route('show.course', $course->slug) }}">{{ $course->title }}</a></h2>
                            <h3><a href="#">{{ $course->track->name}}</a></h3>
                            <span class="posted_on">{{ $course->created_at->diffForHumans()}}</span>
                            <span class="comment">
                                <a href="#"> {{ count($course->user) }} {{ __('User') }}
                                    <i class="icon-speech-bubble"></i>
                                </a>
                            </span>
                            <p>{{ \Str::limit($course->description,35) }}</p>
                            <a href="{{ route('show.course', $course->slug) }}" class="btn btn-primary">Go TO Course Page</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $courses->links() }}
        </div>
    </div>

@endsection
