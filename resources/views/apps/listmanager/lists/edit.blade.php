@extends('layouts.master')

@section('main')
<div class="row">
	<div class="col-8">
		<div class="bg-white rounded border p-3">
			<h2 class="mb-3">Edit this List</h2>
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <p class="lead mb-0">Uh oh. Please correct the errors below</p>
			    </div>
			@endif
			<form method="POST" action="{{ route('listmanager.lists.update', $list->id) }}" enctype="multipart/form-data">
            	@csrf
            	@method('PUT')
				<div class="form-group">
					<label for="listName">List Name</label>
					<input type="text" 
						class="form-control @error('list_name') is-invalid @enderror " 
						name="list_name" id="listName" value="{{ $list->list_name }}" 
						required
					>
					@error('list_name')
						<p class="help text-danger">{{ $errors->first('list_name') }}</p>
					@enderror
				</div>
				<div class="form-group">
					<label for="listDescription">Last Description</label>
					<input type="textarea" class="form-control" name="list_description" id="listDescription" value="{{ $list->list_description }}">
				</div>
				<button type="submit" class="btn btn-primary">Update This List</button>
			</form>
		</div>
	</div>
	<div class="col bg-secondary rounded border-dark p-3">
		<h3 class="text-light">Explainer</h3>
		<p class="text-light">Create a new list here</p>
	</div>
</div>
@endsection