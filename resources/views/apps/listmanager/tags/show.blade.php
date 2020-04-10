@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show tag details</h1>
  <p><strong>ID:</strong> {{ $tag->id }}</p>
  <p><strong>Name:</strong> {{ $tag->tag_name }}</p>
  <p><strong>Description:</strong> {{ $tag->description }}</p>
  <hr>
  <h2>Related:</h2>
  
  <ul>
   
  </ul>
</div>
<hr>
{{ dump($tag) }}
@endsection