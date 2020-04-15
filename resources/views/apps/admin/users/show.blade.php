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
  	@foreach($user->lists as $list)
  		<li><a href="/listmanager/lists/{{ $list->id }}">{{ $list->list_name }}</a></li>
	 @endforeach
  </ol>  
  <h3>Magazines</h3>
  <ol>
    @foreach($user->magazines as $magazine)
      <li><a href="/inboxmag/magazines/{{ $magazine->id }}">{{ $magazine->magazine_name }}</a></li>
   @endforeach
  </ol>
</div>

<hr>
{{ dump($user) }}
@endsection