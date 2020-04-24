@extends('apps._layouts.wizardView')

 @section('title')
	Create a list
@endsection

 @section('subtitle')
	Follow these 3 simple steps, and you'll have a new list in no time!
@endsection

 @section('steptitle')
	Step 1: Name your list
@endsection


@section('body')
{{ dump($request->input())}}
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
