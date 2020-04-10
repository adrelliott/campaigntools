@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show issue details</h1>
  <p><strong>ID:</strong> {{ $issue->id }}</p>
  <p><strong>Number:</strong> {{ $issue->issue_number}}</p>
  <p><strong>Name:</strong> {{ $issue->issue_name }}</p>
  <p><strong>Summary:</strong> {{ $issue->issue_description }}</p>
  <p><strong>Magazine ID:</strong> {{ $issue->magazine_id }}</p>
  <hr>
  <h2>Related:</h2>
  
  <ul>
   
  </ul>
</div>
<hr>
{{ dump($issue) }}
@endsection