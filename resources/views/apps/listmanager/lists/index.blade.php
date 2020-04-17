@extends('apps._layouts.listView')

@section('title')
	<h1 class="float-left">All your lists</h1>
	<a href="{{ route('listmanager.lists.create') }}" >
		<button type="button" class="btn btn-lg btn-primary float-right">Create New List</button>
	</a>
	<div class="clearfix"></div>
@endsection

@section('body')
	<p class="text-muted pl-2">{{ $lists->count() }} lists found.</p>
	@include('apps.listmanager.lists.listTable')
@endsection
