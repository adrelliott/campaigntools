@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show issue details</h1>
  <p><strong>ID:</strong> {{ $issue->id }}</p>
  <p><strong>Number:</strong> {{ $issue->issue_number}}</p>
  <p><strong>Name:</strong> {{ $issue->issue_name }}</p>
  <p><strong>Summary:</strong> {{ $issue->issue_description }}</p>
  <p><strong>Magazine ID:</strong> {{ $issue->magazine_id }}</p>
  <hr>
  <h2>Related:</h2>
  <p><strong>Appears in Magazine: </strong>
    <a href="/inboxmag/magazines/{{ $issue->magazine->id }}">{{ $issue->magazine->magazine_name}}</a>
  </p>
  <h3>Articles in this issue</h3>
  <ol>
    @forelse($issue->articles as $article)
      <li>
        <a href="/inboxmag/articles/{{ $article->id }}">{{ $article->article_name }}</a>
      </li>
    @empty
      <i>No records found</i>
    @endforelse
  </ol>
  <ul>
   
  </ul>
</div>
<hr>
{{ dump($issue) }}
@endsection