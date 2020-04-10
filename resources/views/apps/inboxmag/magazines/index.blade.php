@extends('layouts.master')

@section('main')
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Mag Name</th>
      <th scope="col">Sector</th>
      <th scope="col">Publish Schedule</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($magazines as $magazine)
		    <tr>
		      <th scope="row">{{ $magazine->id }}</th>
		      <td><a href="/inboxmag/magazines/{{ $magazine->id }}">{{ $magazine->magazine_name }}</a></td>
		      <td>{{ $magazine->sector }}</td>
		      <td>{{ $magazine->publish_time }} on a {{ $magazine->publish_day }}</td>
		    </tr>
    @endforeach
  </tbody>
</table>

//add new

//upload
@endsection