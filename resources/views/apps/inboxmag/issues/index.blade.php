@extends('layouts.master')

@section('main')
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Issue No</th>
      <th scope="col">Issue Name</th>
      <th scope="col">Mag ID</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($issues as $issue)
		    <tr>
		      <th scope="row">{{ $issue->id }}</th>
		      <td>{{ $issue->issue_number }}</td>
		      <td><a href="/inboxmag/issues/{{ $issue->id }}">{{ $issue->issue_name }}</a></td>
		      <td>{{ $issue->magazine_id }}</a></td>
		    </tr>
    @endforeach
  </tbody>
</table>

//add new

//upload
@endsection