<nav class="fh5co-nav" role="navigation">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-right">
                    <p class="num">Call: +2 01021493036</p>
                    <ul class="fh5co-social">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-1">
                    <div id="fh5co-logo"><a href="index.html">University<span>Online.</span></a></div>
                </div>
                <div class="col-xs-11 text-right menu-1">
                    <ul>
                        <li class="active"><a href="/home">Home</a></li>
                        {{-- <li><a href="#">Tracks</a></li> --}}
                        <li class="has-dropdown">
                            <a href="blog.html">Subjects</a>
                            <ul class="dropdown">
                                <li><a href="#">Agile</a></li>
                                <li><a href="#">Python</a></li>
                                <li><a href="#">Java</a></li>
                                <li><a href="#">Uml</a></li>
                                <li><a href="#">Php</a></li>
                                <li><a href="#">C#</a></li>
                            </ul>
                        </li>

                        {{-- <li><a href="#">Doctors</a></li> --}}
                        <li class="has-dropdown">
                            <a href="blog.html">Doctors</a>
                            <ul class="dropdown">
                                <li><a href="#">Dr Atef</a></li>
                                <li><a href="#">Dr Shahira</a></li>
                                <li><a href="#">Dr Gad Allah</a></li>
                                <li><a href="#">Dr Tarek</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="blog.html">Tracks</a>
                            <ul class="dropdown">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Backend</a></li>
                                <li><a href="#">Database</a></li>
                                <li><a href="#">Machine Learning</a></li>
                            </ul>
                        </li>
                        <li><a href="/allcourses">Courses</a></li>
                        <li><a href="/contact">Contact</a></li>
                        @guest
                        <li class="btn-cta"><a href="/login"><span>Login</span></a></li>
                        <li class="btn-cta"><a href="/register"><span>register</span></a></li>
                        @endguest
                        @auth
                        <li class="has-dropdown">
                            <a href="#">{{ \Str::limit(auth()->user()->name, 10) }}</a>
                            <ul class="dropdown">
                                <li><a href="profile">Profile</a></li>
                                <li><a href="{{ route('my.courses') }}">My courses</a></li>
                                @if(auth()->user()->admin==1)
                                <li><a href="/dashboard">My Dashboard</a></li>
                                @endif
                                <li><a href="/logout">Log out</a></li>
                            </ul>
                        </li>
                        @endauth

                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>
