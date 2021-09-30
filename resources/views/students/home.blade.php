@extends('layoutsuser.unilearn')
@section('content')
<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(learn/images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>The Art of Teaching is the Art of Assisting Discovery</h1>
                        {{-- <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> --}}
                        <p><a class="btn btn-primary btn-lg btn-learn" href="#">Take A Course</a> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Watch Video</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
{{-- COUNTER  --}}
    <div id="fh5co-counter" class="fh5co-counters">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="{{ $countUsers }}" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Students</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="{{ $countCourses }}" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Courses</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="{{ $countAdmins }}" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Instructor</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="{{ $countVides }}" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Videos</span>
                </div>
            </div>
        </div>
    </div>
{{-- ./COUNTER --}}
    {{-- <div id="fh5co-explore" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Take A Course</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                </div>
            </div>
        </div>
        <div class="fh5co-explore fh5co-explore1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-5 animate-box">
                        <img class="img-responsive" src="{{ asset('learn/images/work_1.png') }}" alt="work">
                    </div>
                    <div class="col-md-4 col-md-pull-8 animate-box">
                        <div class="mt">
                            <h3>We Want You To Learn English</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <ul class="list-nav">
                                <li><i class="icon-check2"></i>Far far away, behind the word</li>
                                <li><i class="icon-check2"></i>There live the blind texts</li>
                                <li><i class="icon-check2"></i>Separated they live in bookmarksgrove</li>
                            </ul>
                            <p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Watch Video</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fh5co-explore">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-pull-1 animate-box">
                        <img class="img-responsive" src="{{ asset('learn/images/work_1.png') }}" alt="work">
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="mt">
                            <div>
                                <h4><i class="icon-user"></i>Real Project For Real Solutions</h4>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
                            </div>
                            <div>
                                <h4><i class="icon-video2"></i>Real Project For Real Solutions</h4>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                            <div>
                                <h4><i class="icon-shield"></i>Real Project For Real Solutions</h4>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- courses section  --}}
    {{-- <div id="fh5co-project">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Recent Important Courses</h2>
                    {{-- <p> </p> --}}
                </div>
            </div>
        </div>


        <div class="container-fluid proj-bottom">
            <div class="row">
                {{-- @foreach($courses as $course)
                    <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                        @if($course->photo)
                        <a href="#"><img src="/code30/images/{{ $course->photo->filename }}" alt="no photo" class="img-responsive" style="width:340px  ;" >
                            <h3>{{ $course->title }}</h3>
                            <span>View Course</span>
                        </a>
                        @else
                        <a href="#"><img src="{{ asset('code30/images/default.jpg') }} " alt="no photo" class="img-responsive">
                            <h3>{{ $course->title }}</h3>
                            <span>View Course</span>
                        </a>
                        @endif
                    </div>
                @endforeach --}}

                {{-- <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="{{ asset('learn/images/project-2.jpg') }}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <h3>Virtual Assistant</h3>
                        <span>View Course</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="{{ asset('learn/images/project-2.jpg') }}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <h3>Virtual Assistant</h3>
                        <span>View Course</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="{{ asset('learn/images/project-3.jpg') }}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <h3>Read Bible</h3>
                        <span>View Course</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="{{ asset('learn/images/project-9.jpg') }}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <h3>Programming</h3>
                        <span>View Course</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="{{ asset('learn/images/project-5.jpg') }}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <h3>Technician</h3>
                        <span>View Course</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="{{ asset('learn/images/project-6.jpg') }}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <h3>Photography</h3>
                        <span>View Course</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="features">
                    <div class="col-md-4 animate-box">
                        <h4>We have coolest features of this course</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  </p>
                    </div>
                    <div class="col-md-4 animate-box">
                        <h4>Great teachers that we have</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  </p>
                    </div>
                    <div class="col-md-4 animate-box">
                        <h4>Steps by steps turorial session</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  </p>
                    </div>
                </div>
                <div class="col-md-12 text-center animate-box">
                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">go to courses page</a></p>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div id="fh5co-steps">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Start A Course</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row bs-wizard animate-box" style="border-bottom:0;">

                <div class="col-xs-3 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum"><h4>Step 1</h4></div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>Create A Free Course</p></div>
                </div>

                <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
                    <div class="text-center bs-wizard-stepnum"><h4>Step 2</h4></div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>Upload Content</p></div>
                </div>

                <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
                    <div class="text-center bs-wizard-stepnum"><h4>Step 3</h4></div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>Make Your Course Beautiful</p></div>
                </div>

                <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
                    <div class="text-center bs-wizard-stepnum"><h4>Step 4</h4></div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>Start Making Money</p></div>
                </div>
            </div>

        </div>
    </div> --}}

    {{-- <div id="fh5co-testimonial" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Testimonials</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row animate-box">
                        <div class="owl-carousel owl-carousel-fullwidth">
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>
                                        <img src="{{ asset('learn/images/person_1.jpg') }}" alt="user">
                                    </figure>
                                    <span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
                                    <blockquote>
                                        <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>
                                        <img src="{{ asset('learn/images/person_2.jpg') }}" alt="user">
                                    </figure>
                                    <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                    <blockquote>
                                        <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>
                                        <img src="{{ asset('learn/images/person_3.jpg') }}" alt="user">
                                    </figure>
                                    <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                    <blockquote>
                                        <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

{{-- SLIDE COURSES  --}}
    <div id="fh5co-blog " class="blog-course">
        <div class="container ">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Latest Courses</h2>
                    <p>Famous topic for you</p>
                </div>
            </div>
            <div class="row">
                @foreach($courses as $course)
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        {{-- <a href="/course/{{ $course->slug }}"><img class="img-responsive" src="code30/images/{{ $course->photo->filename }}" alt=""></a> --}}
                        <a href="/course/{{ $course->slug }} "><img class="img-responsive" src="code30/images/{{ $course->photo->filename }}" alt=""></a>
                        <div class="blog-text">
                            {{-- <h2><a href="/course/{{ $course->slug }}">{{ $course->title }}</a></h2> --}}
                            <h2><a href="/course/{{ $course->slug }} ">{{ $course->title }}</a></h2>
                            <h3><a href="#">{{ $course->track->name}}</a></h3>
                            <span class="posted_on">{{ $course->created_at->diffForHumans()}}</span>
                            <span class="comment">
                                <a href="#">{{ count($course->user) }} {{ __('User') }}
                                    <i class="icon-speech-bubble"></i>
                                </a>
                            </span>
                            <p>{{ \Str::limit($course->description,35) }}</p>
                            <a href="/course/{{ $course->slug }} " class="btn btn-primary ">Go TO Course Page</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
{{-- ./SLIDE COURSES  --}}

{{-- start bootstrab5 carusel  --}}
    <div class="container center">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
                    <div class="carousel-indicators">
                    <button
                        type="button"
                        data-mdb-target="#carouselExampleCaptions"
                        data-mdb-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="Slide 1"
                    ></button>
                    <button
                        type="button"
                        data-mdb-target="#carouselExampleCaptions"
                        data-mdb-slide-to="1"
                        aria-label="Slide 2"
                    ></button>
                    <button
                        type="button"
                        data-mdb-target="#carouselExampleCaptions"
                        data-mdb-slide-to="2"
                        aria-label="Slide 3"
                    ></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                        src="https://mdbootstrap.com/img/new/slides/041.jpg"
                        class="d-block w-100"
                        alt="..."
                        />
                        <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                        src="https://mdbootstrap.com/img/new/slides/042.jpg"
                        class="d-block w-100"
                        alt="..."
                        />
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                        src="https://mdbootstrap.com/img/new/slides/043.jpg"
                        class="d-block w-100"
                        alt="..."
                        />
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                    </div>
                    <button
                    class="carousel-control-prev"
                    type="button"
                    data-mdb-target="#carouselExampleCaptions"
                    data-mdb-slide="prev"
                    >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                    class="carousel-control-next"
                    type="button"
                    data-mdb-target="#carouselExampleCaptions"
                    data-mdb-slide="next"
                    >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
  {{-- end bootstrab5 carusel  --}}



{{-- carusel from school  --}}
            <section class="section courses" >
                <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Choose Your Course</h2>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme">
                        @foreach ($courses as $course)
                            <div class="item">
                                {{-- <img src="code30/images/{{ $course->photo->filename }}" alt="Course #1"> --}}
                                <a href="/course/{{ $course->slug }}"><img class="img-responsive" src="code30/images/{{ $course->photo->filename }}" alt=""></a>
                                <div class="down-content">
                                    {{-- <h4>{{ $course->title }}</h4> --}}
                                    <h2><a href="{{ route('course.show', $course->slug) }}" style="font-weight:bold ;">{{ $course->title }}</a></h2>
                                    <h4><a href="#">{{ $course->track->name}}</a></h4>
                                    <span class="comment">
                                        <i class="icon-speech-bubble"></i>
                                        {{ count($course->user) }} {{ __('User') }}

                                    </span>
                                    <p>{{ \Str::limit($course->description,35) }}</p>
                                    {{-- <a href="/course/{{ $course->slug }}" class="btn btn-primary ">Go TO Course Page</a> --}}
                                    {{-- <div class="author-image ">
                                        <img src="code30/images/{{ $course->photo->filename }}" alt="Author 1" class="auth-img">
                                    </div> --}}
                                    <div class="text-button-pay">
                                        <a href="{{ route('course.show', $course->slug) }}">Goto <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                </div>
            </section>
{{-- end school carusel  --}}

         {{-- <div id="fh5co-started" style="background-image:url(images/img_bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Lets Get Started</h2>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p><a href="#" class="btn btn-default btn-lg">Go To Course Page</a></p>
                    </div>
                </div>
            </div>
         </div>  --}}
@endsection



