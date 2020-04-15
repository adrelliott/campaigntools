@extends('layouts.master')

@section('main')
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">List Name</th>
    </tr>
  </thead>
  <tbody>
  	@forelse($lists as $list)
		    <tr>
		      <th scope="row">{{ $list->id }}</th>
		      <td><a href="/listmanager/lists/{{ $list->id }}">{{ $list->list_name }}</a></td>
		    </tr>
    @empty
      <i>No records found</i>
    @endforelse
  </tbody>
</table>

//add new

//upload
@endsection