@extends('layouts.master')

@section('main')
<div class="row mb-4">
	<div class="col">
		<div class="bg-white rounded border pl-3 pr-3 pt-4 pb-4">
			@yield('title')
			<div class=" mb-4"></div>
			@yield('body')
		</div>
	</div>
</div>
@endsection