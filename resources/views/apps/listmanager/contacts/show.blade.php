@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show contact details</h1>
  <p><strong>ID:</strong> {{ $contact->id }}</p>
  <p><strong>Name:</strong> {{ $contact->first_name }} {{ $contact->last_name }}</p>
  <p><strong>Email:</strong> {{ $contact->email }}</p>
  <hr>
  <h2>Related:</h2>
  <p><strong>Owner: </strong>{{-- $contact->owner->name --}}</p>
  <h3>Belongs to lists</h3>
  <ol>
  	@forelse($contact->lists as $list)
  		<li>
  			<a href="/listmanager/lists/{{ $list->id }}">{{ $list->list_name }}</a>
  		</li>
    @empty
      <i>No records found</i>
  	@endforelse
  </ol>
  <h3>Belongs to Segments</h3>
  <ol>
    @forelse($contact->segments as $segment)
      <li>
        <a href="/listmanager/segments/{{ $segment->id }}">{{ $segment->segment_name }}</a>
      </li>
    @empty
      <i>No records found</i>
    @endforelse
  </ol>
  <h3>Magazines subscribed to</h3>
  <ol>
  	@forelse($contact->magazines as $magazine)
  		<li>
  			<a href="/inboxmag/magazines/{{ $magazine->id }}">{{ $magazine->magazine_name }}</a>
  		</li>
    @empty
      <i>No records found</i>
  	@endforelse
  </ol>
  <h3>Articles clicked on</h3>
  <ol>
  	@forelse($contact->articles as $article)
  		<li>
  			<a href="/inboxmag/articles/{{ $article->id }}">{{ $article->article_name }}</a>
  		</li>
    @empty
      <i>No records found</i>
  	@endforelse
  </ol>
  <h3>Has tags</h3>
  <ul>
  	@forelse($contact->tags as $tag)
  		<li>
  			<a href="/listmanager/tags/{{ $tag->id }}">{{ $tag->tag_name }}</a>
  		</li>
    @empty
      <i>No Records found</i>
  	@endforelse
  </ul>
</div>
<hr>
{{ dump($contact) }}
@endsection