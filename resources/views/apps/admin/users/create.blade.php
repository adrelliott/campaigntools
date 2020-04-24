@extends('apps._layouts.withSidebar')


@section('title')
	<h1>Create a User</h1>
@endsection


@section('body')
	<form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="userFirstName">User's first name?</label>
				<input type="text" 
					class="form-control form-control-lg @error('first_name') is-invalid @enderror " 
					name="first_name" id="userFirstName" value="{{ old('first_name') }}" 
					required
				>
				@error('user_name')
					<p class="help text-danger">{{ $errors->first('first_name') }}</p>
				@enderror
			</div>
			<div class="form-group col-md-6">
				<label for="userFirstName">User's last name?</label>
				<input type="text" 
					class="form-control form-control-lg @error('last_name') is-invalid @enderror " 
					name="last_name" id="userFirstName" value="{{ old('last_name') }}" 
					required
				>
				@error('user_name')
					<p class="help text-danger">{{ $errors->first('last_name') }}</p>
				@enderror
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="email">Email Address</label>
				<input type="text" 
					class="form-control form-control-lg @error('email') is-invalid @enderror " 
					name="email" id="email" value="{{ old('email') }}" 
					required
				>
				@error('email')
					<p class="help text-danger">{{ $errors->first('email') }}</p>
				@enderror
				<small id="emailHelp" class="form-text text-muted">Has to be unique!</small>
			</div>
			<div class="form-group col-md-6">
				<label for="emailConfirmation">Retype Email Address</label>
				<input type="text" 
					class="form-control form-control-lg @error('emailConfirmation') is-invalid @enderror " 
					name="emailConfirmation" id="emailConfirmation" value="{{ old('emailConfirmation') }}" 
					required
				>
				@error('emailConfirmation')
					<p class="help text-danger">{{ $errors->first('emailConfirmation') }}</p>
				@enderror
			</div>
		</div>
		<div class="pt-3">
			<div class="float-right">
				<a class="btn btn-lg btn-outline-secondary" href="{{ route('admin.users.index') }}">Cancel & Return</a>
				<button type="submit" class="btn btn-lg btn-primary">Save & Continue</button>
			</div>	
		</div>	
		<div class="clearfix"></div>
	</form>
@endsection

@section('sidebar')
	<h3 class="">Creating a User</h3>
	<hr>
	<p class="">Create a new user here</p>
@endsection
