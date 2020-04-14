@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show article details</h1>
  <p><strong>ID:</strong> {{ $article->id }}</p>
  <p><strong>Name:</strong> {{ $article->article_name }}</p>
  <p><strong>Summary:</strong> {{ $article->article_summary }}</p>
  <p><strong>Link:</strong> {{ $article->link }}</p>
  <p><strong>Issue ID:</strong> {{ $article->issue_id }}</p>
  <p><strong>Suggestion ID:</strong> {{ $article->suggestion_id }}</p>
  <hr>
  <h2>Related:</h2>
  <p><strong>Suggestion:</strong> <a href="/inboxmag/suggestions/{{ $article->suggestion->id }}">{{ $article->suggestion->title }}</a></p>
  <p><strong>Suggestion link:</strong> {{ $article->suggestion->link }}</p>
  <p><strong>Issue no:</strong> {{ $article->issue->issue_number }}</p>
  <p><strong>Issue name:</strong> <a href="/inboxmag/issues/{{ $article->issue->id }}">{{ $article->issue->issue_name }}</a></p>
  <ul>
   
  </ul>
</div>
<hr>
{{ dump($article) }}
@endsection