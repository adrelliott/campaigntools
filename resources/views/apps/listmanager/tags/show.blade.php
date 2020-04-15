@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show tag details</h1>
  <p><strong>ID:</strong> {{ $tag->id }}</p>
  <p><strong>Name:</strong> {{ $tag->tag_name }}</p>
  <p><strong>Description:</strong> {{ $tag->description }}</p>
  <hr>
  <h2>Related:</h2>
  <h3>Contacts with this tag</h3>
  <ol>
  	@forelse($tag->getContacts as $contact)
  		<li>
  			<a href="/listmanager/contacts/{{ $contact->id }}">{{ $contact->first_name }} {{ $contact->last_name }} ({{ $contact->email }})</a>
  		</li>
    @empty
      <i>No records found</i>
  	@endforelse
  </ol>
  <ul>
   
  </ul>
</div>
<hr>
{{ dump($tag) }}
@endsection