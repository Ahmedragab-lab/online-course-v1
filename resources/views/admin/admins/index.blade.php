@extends('layouts.master')
@section('css')

@section('title')
    Admin Management
@stop
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> Admin Management</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Admin</a></li>
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
        {{-- MESSAGE --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        {{-- MESSAGE --}}
    @endif
</div>

<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">{{ __('No') }}</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Phone') }}</th>
                                <th scope="col">{{ __('Address') }}</th>
                                <th scope="col">{{ __('Creation Date') }}</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $rows = 1; ?>
                            @foreach ($admins as $admin)
                                <tr>
                                    <td>{{ $rows }}</td>
                                    <td><a href="#">{{ $admin->name }}</a></td>
                                    <td><a href="mailto:{{ $admin->email }}">{{ $admin->email }}</a></td>
                                    <td>{{ $admin->phone }}</td>
                                    <td>{{ $admin->address }}</td>
                                    <td>{{ $admin->created_at->format('d/m/Y H:i') }}</td>
                                    {{-- <td>{{ $admin->created_at->diffForHumans() }}</td> --}}
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <form action="{{ route('admin.destroy', $admin) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a class="dropdown-item" href="{{ route('admin.edit', $admin) }}">{{ __('Edit') }}</a>
                                                    {{-- OWNER AND PROGRAMMER ONLY --}}
                                                    @if (strtolower(auth()->user()->email) == OWNER || strtolower(auth()->user()->email) == PROGRAMMER)
                                                        <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this admin?") }}') ? this.parentElement.submit() : ''">
                                                            {{ __('Delete') }}
                                                        </button>
                                                    @else
                                                    {{-- ./OWNER AND PROGRAMMER ONLY --}}
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php $rows++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
