@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show contact details</h1>
  <p><strong>ID:</strong> {{ $contact->id }}</p>
  <p><strong>Name:</strong> {{ $contact->first_name }} {{ $contact->last_name }}</p>
  <p><strong>Email:</strong> {{ $contact->email }}</p>
  <hr>
  <h2>Related:</h2>
  
  <ul>
   
  </ul>
</div>

@endsection