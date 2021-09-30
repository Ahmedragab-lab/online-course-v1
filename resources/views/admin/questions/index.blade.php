@extends('layouts.master')
@section('css')

@section('title')
    Questions
@stop
@section('page-header')
{{-- PAGE TITLE --}}
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> Question Management</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Question</a></li>
                <li class="breadcrumb-item active">Management</li>
            </ol>
        </div>
    </div>
</div>
{{-- PAGE TITLE --}}
@endsection
@section('content')
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Questions') }}</h3>
                        </div>
                        {{-- OWNER ONLY --}}
                        @if (auth()->user()->email == OWNER || auth()->user()->email == PROGRAMMER)
                        <div class="col-4 text-right">
                            <a href="{{ route('question.create') }}" class="btn btn-sm btn-primary">{{ __('Add Question') }}</a>
                            <a href="{{ route('quiz.index') }}" class="btn btn-sm btn-primary">{{ __('Quizzes') }}</a>

                        </div>
                        @endif
                        {{-- OWNER ONLY --}}
                    </div>
                </div>

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

                @if (count($questions))
                <div class="table-responsive">
                    <table class="table align-items-center table-flush table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">{{ __('NO') }}</th>
                                <th scope="col">{{ __('Title') }}</th>
                                <th scope="col">{{ __('Quiz Name') }}</th>
                                <th scope="col">{{ __('Answers') }}</th>
                                <th scope="col">{{ __('RightAnswer') }}</th>
                                <th scope="col">{{ __('Score') }}</th>
                                <th scope="col">{{ __('Creation Date') }}</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $rows = 1; ?>
                            @foreach ($questions as $question)
                                <tr>
                                    <td>{{ $rows }}</td>
                                    <td>{{ $question->title }}</td>
                                    <td><a href="{{ route('quiz.show', $question->quiz) }}">{{ $question->quiz->name }}</a></td>
                                    <td>{{ $question->answers }}</td>
                                    <td>{{ $question->right_answer }}</td>
                                    <td>{{ $question->score }}</td>
                                    <td>{{ $question->created_at->diffForHumans() }}</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <form action="{{ route('question.destroy', $question) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a class="dropdown-item" href="{{ route('question.edit', $question) }}">{{ __('Edit') }}</a>
                                                        <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this question?") }}') ? this.parentElement.submit() : ''">
                                                            {{ __('Delete') }}
                                                        </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php $rows++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <p class="lead text-center"> No Questions found</p>
                @endif

                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{-- {{ $question->links() }} --}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
