@extends('layouts.master')

@section('main')
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Cat Name</th>
      <th scope="col">Descrption</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($categories as $category)
		    <tr>
		      <th scope="row">{{ $category->id }}</th>
		      <td><a href="/inboxmag/categories/{{ $category->id }}">{{ $category->category_name }}</a></td>
		      <td>{{ $category->description }}</td>
		    </tr>
    @endforeach
  </tbody>
</table>

//add new

//upload
@endsection