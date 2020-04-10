@extends('layouts.master')

@section('main')
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Link</th>
      <th scope="col">Author</th>
      <th scope="col">Source</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($suggestions as $suggestion)
		    <tr>
		      <th scope="row">{{ $suggestion->id }}</th>
		      <td><a href="/inboxmag/suggestions/{{ $suggestion->id }}">{{ $suggestion->title }}</a></td>
		      <td>{{ $suggestion->link }}</td>
          <td>{{ $suggestion->author }}</td>
          <td>{{ $suggestion->source }}</td>
		    </tr>
    @endforeach
  </tbody>
</table>

//add new

//upload
@endsection