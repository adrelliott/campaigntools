@extends('apps._layouts.withSidebar')

 @section('title')
	<h1 class="float-left">Create a list</h1>
	<a href="{{ route('listmanager.contacts.create') }}" >
		<button type="button" class="btn btn-lg btn-primary float-right">Add Contacts</button>
	</a>
	<div class="clearfix"></div>
@endsection


@section('body')
	<form method="POST" action="{{ route('listmanager.lists.store') }}" enctype="multipart/form-data">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="listName">What shall we call your list?</label>
				<input type="text" 
					class="form-control form-control-lg @error('list_name') is-invalid @enderror " 
					name="list_name" id="listName" value="{{ old('list_name') }}" 
					required
				>
				@error('list_name')
					<p class="help text-danger">{{ $errors->first('list_name') }}</p>
				@enderror
				<small id="emailHelp" class="form-text text-muted"><em class="text-info">FOR YOUR EYES ONLY:  </em>Your contacts don't see this!</small>
			</div>
		</div>
		<div class="form-group">
			<label for="listDescription">List Description</label>
			<textarea type="textarea" class="form-control" name="list_description" id="listDescription" rows="3">{{ old('list_description') }}
			</textarea>
			<small id="emailHelp" class="form-text text-muted"><em class="text-info">FOR YOUR EYES ONLY:  </em>Your contacts don't see this!</small>
		</div>
		<div class="pt-3">
			<div class="float-right">
				<a class="btn btn-lg btn-outline-secondary" href="{{ route('listmanager.lists.index') }}">Cancel & Return</a>
				<button type="submit" class="btn btn-lg btn-primary">Save & Continue</button>
			</div>	
		</div>	
		<div class="clearfix"></div>
	</form>
@endsection

@section('sidebar')
	<h3 class="">Creating Tags</h3>
	<hr>
	<p class=""><strong>Tag Name:</strong> Keep it short but descriptive. (Nobody sees this except you).</p>
	<p class="pl-3"><em>E.g. 'Bought Product X'</em></p>
	<p class=""><strong>Tag Description:</strong> Explain here wht people, with this tag</p>
	<p class="pl-3"><em>E.g. 'This is for customer who have actually paid me some money!'</em></p>
@endsection
