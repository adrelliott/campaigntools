@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show category details</h1>
  <p><strong>ID:</strong> {{ $category->id }}</p>
  <p><strong>Name:</strong> {{ $category->category_name }}</p>
  <p><strong>Summary:</strong> {{ $category->category_description }}</p>
  <hr>
  <h2>Related:</h2>
  
  <ul>
   
  </ul>
</div>
<hr>
{{ dump($category) }}
@endsection