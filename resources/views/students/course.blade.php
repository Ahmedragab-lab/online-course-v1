@extends('layoutsuser.unilearn')
@section('content')
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Welcome to <strong>{{ $course->title }}</strong> course page</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
{{-- course card  --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card coursepic">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                      <img src="/code30/images/{{ $course->photo->filename }}" alt="Course #1" style="width:600px"/>
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                    </div>
                    {{-- <div class="card-body">
                      <h5 class="card-title">{{ $course->title }}</h5>
                      <p class="card-text">{{ \Str::limit($course->description,35) }}</p>
                      <a href="#!" class="btn btn-primary btn-lg">Button</a>
                    </div> --}}
                  </div>
            </div>
            <div class="col-md">
                <h1> Course Information </h1>
                <h2 >Title : {{ $course->title }} Course</h2>
                <h3 >Track : {{ $course->track->name }}</h3>
                <h3 >Student : {{-- (count(auth()->user()->course()->where('slug',$course->slug)->get())) --}}</h3>
                <p class=" color">{{ \Str::limit($course->description,35) }}</p>

                <div class="enroll-form">
                    @auth

                    @endauth

                <form action="/course/{{ $course->slug }}" method="Post">
                    @csrf
                    {{-- AUTHINTACTED ONLY --}}
                    @auth
                        @if (count(auth()->user()->course()->where('slug',$course->slug)->get()) > 0)
                            <div class="alert alert-success ">you are enrolled</div>
                        @else
                            <button type="submit" class="btn btn-primary">Enroll</button>
                        @endif
                    @endauth
                    {{-- ./AUTHINTICATED ONLY --}}
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-primary">Enroll</a>
                    @endguest
                </form>
                {{-- @endif --}}
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end course card  --}}
{{-- video frame  --}}
@auth
@if (count(auth()->user()->course()->where('slug',$course->slug)->get()) > 0)
  <section class="section courses" >
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-heading">
                      <h2>Course Videos</h2>
                  </div>
              </div>
              <div class="col-md-9 ratio ratio-16x9 "  style="width:75%;" >
                    @if (!empty($course->video()->first()))

                    <iframe  src="{{ $course->video()->first()->link }}"  title="YouTube video" allowfullscreen > </iframe>
                    @else
                    <div  class="btn btn-info"><h1 style="color:#fff" >there is no video to show</h1></div>
                    @endif

              </div>
              <div class="col-md ">
                  <div class="accordion" id="accordionPanelsStayOpenExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <h1>{{ $course->title }} Section 1</h1>
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                          <div class="accordion-body">
                              @if(count($course->video) > 0)
                                @foreach($course->video as $video)
                                <div class="open-video">
                                    <h3><a href="{{ $video->link }}" style="color:rgb(12, 11, 11);"><i class="fab fa-youtube" ></i> {{ $video->title }}</a> </h3>
                                </div>
                                @endforeach
                              @endif
                          </div>
                        </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </section>
@endif
@endauth
{{-- end video frame --}}


@endsection
