@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show suggestion details</h1>
  <p><strong>ID:</strong> {{ $suggestion->id }}</p>
  <p><strong>Name:</strong> {{ $suggestion->title }}</p>
  <p><strong>Summary:</strong> {{ $suggestion->excerpt }}</p>
  <p><strong>Link:</strong> {{ $suggestion->link }}</p>
  <p><strong>Author</strong> {{ $suggestion->author }}</p>
  <p><strong>Source</strong> {{ $suggestion->source }}</p>
  <hr>
  <h2>Related:</h2>
  <h3>Articles using this suggestion:</h3>
  <ul>
    @foreach($suggestion->articles as $article)
      <li>
        <a href="/inboxmag/articles/{{ $article->id }}">
          {{ $article->article_name}}
        </a>
      </li>
    @endforeach
  </ul>
  
</div>
<hr>
{{ dump($suggestion) }}
@endsection