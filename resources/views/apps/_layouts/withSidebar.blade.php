@extends('layouts.master')

@section('main')
<div class="row mb-4">
	<div class="col-9">
		<div class="bg-white rounded border pl-3 pr-3 pt-3 pb-4">

			@yield('title')

			@if ($errors->any())
			    <div class="alert alert-danger">
			        <p class="lead mb-0">Uh oh. Please correct the errors below</p>
			    </div>
			@endif

			<div class="mt-4">
				@yield('body')
			</div>
			
		</div>
	</div>
	<div class="col">
		<div class="bg-white rounded border p-3">
			@yield('sidebar')
		</div>
	</div>
</div>
@endsection