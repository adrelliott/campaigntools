@extends('layouts.master')

@section('main')
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Link</th>
      <th scope="col">Issue ID</th>
      <th scope="col">Suggestion ID</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($articles as $article)
		    <tr>
		      <th scope="row">{{ $article->id }}</th>
		      <td><a href="/lists/articles/{{ $article->id }}"{{ $article->article_name }}</a></td>
		      <td>>{{ $article->link }}</td>
          <td>{{ $article->issue_id }}</td>
          <td>{{ $article->suggestion_id }}</td>
		    </tr>
    @endforeach
  </tbody>
</table>

//add new

//upload
@endsection