@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show user details</h1>
  <p><strong>ID:</strong> {{ $user->id }}</p>
  <p><strong>Name:</strong> {{ $user->name }}</p>
  <p><strong>Email:</strong> {{ $user->email }}</p>
  <p><strong>Verified at</strong> {{ $user->email_verified_at }}</p>
  <hr>
  <h2>Related:</h2>
  <h3>Lists</h3>
  <ol>
  	@foreach($user->segments as $segment)
  		<li><a href="/listmanager/segments/{{ $segment->id }}">{{ $segment->segment_name }}</a></li>
	@endforeach
  </ol>
</div>

<hr>
{{ dump($user) }}
@endsection