@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show contact details</h1>
  <p><strong>ID:</strong> {{ $contact->id }}</p>
  <p><strong>Name:</strong> {{ $contact->first_name }} {{ $contact->last_name }}</p>
  <p><strong>Email:</strong> {{ $contact->email }}</p>
  <hr>
  <h2>Related:</h2>
  <h3>Belongs to lists</h3>
  <ol>
  	@foreach($contact->segments as $segment)
  		<li>
  			<a href="/listmanager/segments/{{ $segment->id }}">{{ $segment->segment_name }}</a>
  		</li>
  	@endforeach
  </ol>
  <h3>Magazines subscribed to</h3>
  <ol>
  	@foreach($contact->subscribesTo as $magazine)
  		<li>
  			<a href="/listmanager/magazines/{{ $magazine->id }}">{{ $magazine->magazine_name }}</a>
  		</li>
  	@endforeach
  </ol>
  <h3>Articles clicked on</h3>
  <ol>
  	@foreach($contact->hasClicked as $article)
  		<li>
  			<a href="/listmanager/articles/{{ $article->id }}">{{ $article->article_name }}</a>
  		</li>
  	@endforeach
  </ol>
  <h3>Has tags</h3>
  <ul>
  	@foreach($contact->tags as $tag)
  		<li>
  			<a href="/listmanager/tags/{{ $tag->id }}">{{ $tag->tag_name }}</a>
  		</li>
  	@endforeach
  </ul>
</div>
<hr>
{{ dump($contact) }}
@endsection