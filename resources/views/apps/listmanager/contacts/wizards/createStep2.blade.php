@extends('apps._layouts.wizardView')


@section('title')
	Create a contact
@endsection

@section('subtitle')
	In three setps, you'll have a conact
@endsection

@section('steptitle')
	Step 2: Add your contact
@endsection


@section('body')
	<form method="POST" action="{{ route('listmanager.contacts.store', ['step' => 2]) }}" enctype="multipart/form-data">
		@csrf
		<div class="form-row">
			<div class="form-group">
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
		<div class="mt-5">
			@isset($data['navigationLinks']['prev'])
				<a class="btn btn-lg btn-outline-secondary float-left" 
					href="{{ $data['navigationLinks']['prev']['url'] }}"
				>
					<< {{ $data['navigationLinks']['prev']['name'] }}
				</a>
			@endisset
			<button type="submit" class="btn btn-lg btn-success float-right progress-bar-striped progress-bar-animated">
				{{ $data['navigationLinks']['next']['name'] }} >>
			</button>
		</div>	
		<div class="clearfix"></div>
	</form>
@endsection
