@extends('layouts.master')

@section('main')
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tag Name</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($tags as $tag)
		    <tr>
		      <th scope="row">{{ $tag->id }}</th>
		      <td><a href="/listmanager/tags/{{ $tag->id }}">{{ $tag->tag_name }}</a></td>
		    </tr>
    @endforeach
  </tbody>
</table>

//add new

//upload
@endsection