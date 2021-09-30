@extends('layoutsuser.unilearn')
@section('title' , 'my profile')
@section('css')
     
@endsection


@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>{{ $user->name }} Profile</h1>
						{{-- <h2>Free html5 templates Made by <a href="http://freehtml5.co" target="_blank">freehtml5.co</a></h2> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
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
<div id="fh5co-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-push-1 animate-box">	
				<div class="fh5co-contact-info">
					<h1>{{ $user->name }} Profile Information</h1>
					<div class="card">
						<div class="card-body">
						<div class="d-flex flex-column align-items-center text-center">
							@if ($user->photo)
								<img  src="/code30/images/{{$user->photo->filename }}" class="rounded-circle" width="250"   alt="no pic"  >						
							@else
							<img src="{{ asset('code30/images/default.jpg') }}" class="rounded-circle" width="250"  alt="no pic"  >
							@endif
							<div class="mt-3">
								{{-- <form action="/profile-photo" method="post" enctype="multipart/form-data" autocomplete="off">
									@csrf
									@method('put')
									<div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
										<input type="file" name="image" id="input-image" class="{{ $errors->has('image') ? ' is-invalid' : '' }}">							
										@if ($errors->has('image'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('image') }}</strong>
											</span>
										@endif 
									</div>
									<button type="submit" class="btn btn-success mt-4">{{ __('Upload') }}</button>
								</form> --}}
								<a id="upload_btn" class="btn btn-default upload" href=""><i class="fas fa-cloud-upload-alt"></i>Upload</a>
								<form action="/profile-photo" method="POST" enctype="multipart/form-data" id="form">
									@csrf
									@method('put')
									<input type="file" name="image" id="image_file">
								</form>
								<h3 class="text-secondary mb-1">{{ $user->name }}</h3>
								<h4 class="text-secondary mb-1">{{ $user->email}}</h4>
								<h5 class="text-secondary mb-1 ">+20{{ $user->phone }}</h5>
								<h5 class="text-secondary mb-1">{{ $user->address }}</h5>
								<h5 class="text-secondary mb-1 "><i class="fas fa-user-shield"></i> {{ $user->admin==1?'Doctor' : 'Student' }}</h5>
								<h5 class="text-secondary mb-1">{{ $user->admin==1 ? '' :  $user->score . 'points' }}</h5>
								<h5 class="text-secondary mb-1">{{ $user->score }} points</h5>
								<h5 class="{{ $user->email_verified_at ? 'text-success' : 'text-danger' }} " style="font-weight:bold; font-size:17px;">
									{{ $user->email_verified_at ? 'Verified' : 'Unverified' }}
								</h5>
								<h5 class="text-secondary mb-1"> Member At : {{ $user->created_at->diffForHumans()}}</h5>
									
								<a href="/mycourses" class="btn btn-outline-primary">My Courses</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 animate-box">
				<h1>update information</h1>
				<form action="/profile" method="post" autocomplete="off">
					@csrf
					@method('put')
					<div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
						<label class="form-control-label" for="input-name">{{ __('Name') }}</label>
						<input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', $user->name) }}" required autofocus>

						@if ($errors->has('name'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('name') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
						<label class="form-control-label" for="input-email">{{ __('Email') }}</label>
						<input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', $user->email) }}" >

						@if ($errors->has('email'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
						<label class="form-control-label" for="input-phone">{{ __('Phone') }}</label>
						<input type="number" name="phone" id="input-phone" class="form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="{{ __('phone no') }}" value="{{ old('phone', $user->phone) }}" >

						@if ($errors->has('phone'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('phone') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
						<label class="form-control-label" for="input-address">{{ __('Address') }}</label>
						<input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="{{ __('address') }}" value="{{ old('address', $user->address) }}" >

						@if ($errors->has('address'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('address') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group">
						<input type="submit" value="save" class="btn btn-primary">
					</div>
				</form>		
			</div>
		</div>		
	</div>
</div>
@endsection
@section('js')

@endsection