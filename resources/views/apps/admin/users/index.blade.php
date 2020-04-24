@extends('layouts.master')

@section('main')
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Created On</th>
      <th scope="col">Verified?</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($users as $user)
		    <tr>
		      <th scope="row">{{ $user->id }}</th>
		      <td><a href="/admin/users/{{ $user->id }}">{{ $user->fullName() }}</a></td>
          <td>{{ $user->email }}</td>
		      <td>{{ $user->created_at }}</a></td>
          <td>{{ $user->verified }}</a></td>
		    </tr>
    @endforeach
  </tbody>
</table>

@endsection