@extends('layouts.master')

@section('main')
<div class="row">
	<div class="col-8">
		<div class="bg-white rounded border p-3">
			<h2 class="mb-3">Edit Organisation</h2>
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <p class="lead mb-0">Uh oh. Please correct the errors below</p>
			    </div>
			@endif
			<form method="POST" action="{{ route('admin.organisations.update', $organisation->id) }}" enctype="multipart/form-data">
            	@csrf
            	@method('PUT')
				<div class="form-group">
					<label for="organisationName">Organisation Name</label>
					<input type="text" 
						class="form-control @error('organisation_name') is-invalid @enderror " 
						name="organisation_name" id="organisationName" value="{{ $organisation->organisation_name }}" 
						required
					>
					@error('organisation_name')
						<p class="help text-danger">{{ $errors->first('organisation_name') }}</p>
					@enderror
				</div>
				<div class="form-group">
					<label for="organisationWebsite">Organisation Website</label>
					<input type="textarea" class="form-control" name="organisation_website" id="organisationWebsite" value="{{ $organisation->organisation_website }}">
				</div>
				<button type="submit" class="btn btn-primary">Update This Organisation</button>
			</form>
		</div>
	</div>
	<div class="col bg-secondary rounded border-dark p-3">
		<h3 class="text-light">Explainer</h3>
		<p class="text-light">Edit your new organisation here</p>
	</div>
</div>
@endsection