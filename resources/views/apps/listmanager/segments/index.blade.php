@extends('layouts.master')

@section('main')
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Segment Name</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($segments as $segment)
		    <tr>
		      <th scope="row">{{ $segment->id }}</th>
		      <td><a href="/listmanager/segments/{{ $segment->id }}">{{ $segment->segment_name }}</a></td>
		    </tr>
    @endforeach
  </tbody>
</table>

//add new

//upload
@endsection