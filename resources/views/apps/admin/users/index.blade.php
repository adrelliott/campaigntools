@extends('layouts.master')

@section('main')
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Verified At</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($users as $user)
		    <tr>
		      <th scope="row">{{ $user->id }}</th>
		      <td><a href="/admin/users/{{ $user->id }}">{{ $user->name }}</a></td>
          <td>{{ $user->email }}</td>
		      <td>{{ $user->email_verified_at }}</a></td>
		    </tr>
    @endforeach
  </tbody>
</table>

//add new

//upload
@endsection