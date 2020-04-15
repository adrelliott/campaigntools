@extends('layouts.master')

@section('main')
<div class="row">
	<div class="col-8">
		<div class="bg-white rounded border p-3">
			<h2 class="mb-3">Create a List</h2>
			@error('title')
			    <div class="alert alert-danger">{{ $message }}</div>
			@enderror
			<form method="POST" action="{{ route('listmanager.lists.store') }}" enctype="multipart/form-data">
            	@csrf
				<div class="form-group">
					<label for="listName">List Name</label>
					<input type="text" class="form-control" name="list_name" id="listName">
				</div>
				<div class="form-group">
					<label for="listDescription">Last Description</label>
					<input type="textarea" class="form-control" name="list_description" id="listDescription">
				</div>
				<button type="submit" class="btn btn-primary">Create This List</button>
			</form>
		</div>
	</div>
	<div class="col bg-secondary rounded border-dark p-3">
		<h3 class="text-light">Explainer</h3>
		<p class="text-light">Create a new list here</p>
	</div>
</div>
@endsection