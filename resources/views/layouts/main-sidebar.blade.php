<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="{{ route('dashboard') }}">
                                <i class="ti-home"></i>
                                <span class="right-nav-text">{{ trans('trans.Dashboard') }}</span>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title"> <h6 style="color:#fff">{{ trans('trans.Components') }}</h6></li>
                    <!-- menu item Elements-->
                    @if(auth()->user()->email == OWNER || auth()->user()->email == PROGRAMMER)
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                                    <div class="pull-left"><i class="fa fa-user-secret"></i><span
                                            class="right-nav-text">{{ trans('trans.Admin') }}</span></div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="elements" class="collapse" data-parent="#sidebarnav">
                                    <li><a href="{{ route('admin.create') }}">{{ trans('trans.New Admin') }}</a></li>
                                    <li><a href="{{ route('admin.index') }}">{{ trans('trans.Admin Management') }}</a></li>
                                </ul>
                            </li>
                    @endif
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#element">
                            <div class="pull-left"><i class="fa fa-users"></i><span
                                    class="right-nav-text">{{ trans('trans.User') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="element" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('user.create') }}">{{ trans('trans.New User') }}</a></li>
                            <li><a href="{{ route('user.index') }}">{{ trans('trans.User Management') }}</a></li>
                        </ul>
                    </li>
                    <!-- menu item calendar-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table1">
                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">Tracks</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table1" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('track.index') }}">show tracks</a> </li>
                            <li> <a href="{{ route('track.create') }}">Add track</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table2">
                            <div class="pull-left"><i class="fas fa-chalkboard-teacher text-blue"></i><span class="right-nav-text">courses</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table2" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('course.index') }}">show courses</a> </li>
                            <li> <a href="{{ route('course.create') }}">Add course</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table7">
                            <div class="pull-left"><i class="fa fa-tv"></i><span class="right-nav-text">Sectios</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table7" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="#">show Sectios</a> </li>
                            <li> <a href="#">Add Sectios</a> </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table3">
                            <div class="pull-left"><i class="fab fa-youtube text-blue"></i><span class="right-nav-text">Videos</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table3" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('video.index') }}">show video</a> </li>
                            <li> <a href="{{ route('video.create') }}">Add video</a> </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table4">
                            <div class="pull-left"><i class="far fa-edit text-blue"></i><span class="right-nav-text">Quizzies</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table4" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('quiz.index') }}">Show Quizzes</a> </li>
                            <li> <a href="{{ route('quiz.create') }}">Add Quizzies</a> </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table5">
                            <div class="pull-left"><i class="far fa-question-circle text-blue"></i><span class="right-nav-text">Questions</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table5" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('question.index') }}">Show Questions</a> </li>
                            <li> <a href="{{ route('question.create') }}">Add Questions</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table6">
                            <div class="pull-left"><i class="fa fa-id-card-o"></i><span class="right-nav-text">User Permission</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table6" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="#">Add Permission</a> </li>
                            <li> <a href="#">Show Permission</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    {{-- </div>
</div> --}}
<!-- Left Sidebar End-->
<!--=================================
