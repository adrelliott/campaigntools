@extends('apps._layouts.fullWidth')

<?php $organisations = App\Organisation::all(); ?>

@section('title')
	<h1 class="float-left">All your Organisations</h1>
	<a href="{{ route('admin.organisations.create') }}" >
		<button type="button" class="btn btn-lg btn-primary float-right">Create New Organisation</button>
	</a>
	<div class="clearfix"></div>
@endsection

@section('body')
	<p class="text-muted pl-2">{{ $organisations->count() }} organisations found.</p>
	@include('apps.admin.organisations.organisationsTable')
@endsection
