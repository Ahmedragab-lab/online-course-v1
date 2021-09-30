@extends('layouts.master')
@section('css')
 {{-- <link rel="stylesheet" href="{{ asset('eshop/style.css') }}"> --}}
 {{-- <link rel="stylesheet" href="{{ asset('eshop/wolf.css') }}"> --}}
 <link href="{{ asset('argon/vendor/nucleo/css/nucleo.min.css') }}" rel="stylesheet">
 <link href="{{ asset('argon/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

 <!-- Argon CSS -->
 <link type="text/css" href="argon/css/argon.min.css" rel="stylesheet">

 <link rel="stylesheet" type="text/css" href="{{ asset('code30/css/admin_custom.css') }}">
@section('title')
    course management
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> Course Management</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Course</a></li>
                <li class="breadcrumb-item active">Management</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
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
    <!-- row -->
    <div class="row">
        @foreach($courses as $course)
        <div class="col-sm-3">
            <div class="card">
                @if($course->photo)
                <img src="/code30/images/{{$course->photo->filename}}" class="card-img-top" alt="Course Photo">
                @else
                <img  src="/code30/images/default.jpg" class="card-img-top" alt="Course Photo">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ \Str::limit($course->title, 100) }}</h5>

                    <form  method="POST" action="{{ route('course.destroy', $course) }}">
                        
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('course.edit', $course) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ route('course.show', $course) }}" class="btn btn-info btn-sm">show</a>

                        <input class="btn btn-danger btn-sm" type="submit" value="Delete" name="deletecourse">
                    </form>
                
                </div>
            </div>
        </div>
        @endforeach


    </div>
            <!-- row closed -->
@endsection
@section('js')
{{-- <script {{ asset('eshop/index.js') }}></script> --}}
<script src="{{ asset('argon/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('argon/js/argon.js?v=1.0.0') }}"></script>
@endsection
