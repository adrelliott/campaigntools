@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show magazine details</h1>
  <p><strong>ID:</strong> {{ $magazine->id }}</p>
  <p><strong>Name:</strong> {{ $magazine->magazine_name }}</p>
  <p><strong>Description:</strong> {{ $magazine->magazine_description }}</p>
  <p><strong>Sector:</strong> {{ $magazine->sector }}</p>
  <p><strong>Publish schedule:</strong> {{ $magazine->publish_time }} on {{ $magazine->publish_day }}</p>
  <p><strong>User ID:</strong> {{ $magazine->user_id }}</p>
  <hr>
  <h2>Related:</h2>
  
  <ul>
   
  </ul>
</div>

@endsection