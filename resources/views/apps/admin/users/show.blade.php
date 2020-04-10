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
  
  <ul>
   
  </ul>
</div>

@endsection