@extends('layouts.master')

@section('main')

<div class="row mb-4 ">
	<div class="col-8 offset-2">
		<div class="bg-white rounded border border-dark pl-3 pr-3 pt-4 pb-4">
			<div class="text-center mb-4">
				<h1 class="text-uppercase">
					@yield('title')
				</h1>
				<p class="lead font-weight-lighter">
					@yield('subtitle')
				</p>
			</div>
			<div class="">
				<x-progress-bar :data="$data"/>
			</div>
			<div class="col-10 offset-1 pt-4 pb-4">
				<h3 class="text-uppercase">
					@yield('steptitle')
				</h3>
				@yield('body')
			</div>
		</div>
	</div>
</div>
		
@endsection
