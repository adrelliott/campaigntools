@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show segment details</h1>
  <p><strong>ID:</strong> {{ $segment->id }}</p>
  <p><strong>Name:</strong> {{ $segment->segment_name }}</p>
  <p><strong>Description:</strong> {{ $segment->description }}</p>
  <hr>
  <h2>Related:</h2>
  
  <ul>
   
  </ul>
</div>

@endsection