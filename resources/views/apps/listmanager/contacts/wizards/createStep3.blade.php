@extends('apps._layouts.wizardView')


@section('title')
	Create a contact
@endsection

@section('subtitle')
	In three setps, you'll have a conact
@endsection

@section('steptitle')
	Step 3: Add your contact
@endsection


@section('body')
	<p>stuff goes here</p>
	<div class="mt-2">
		@isset($data['navigationLinks']['prev'])
			<a class="btn btn-lg btn-outline-secondary float-left" 
				href="{{ $data['navigationLinks']['prev']['url'] }}"
			>
				<< {{ $data['navigationLinks']['prev']['name'] }}
			</a>
		@endisset
		@isset($data['navigationLinks']['next'])
			<a class="btn btn-lg btn-success float-right" 
				href="{{ $data['navigationLinks']['next']['url'] }}"
			>
				{{ $data['navigationLinks']['next']['name'] }} >>
			</a>
		@endisset
	</div>
	<div class="clearfix"></div>
@endsection
