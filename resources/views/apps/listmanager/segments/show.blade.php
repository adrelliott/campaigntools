@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show segment details</h1>
  <p><strong>ID:</strong> {{ $segment->id }}</p>
  <p><strong>Name:</strong> {{ $segment->segment_name }}</p>
  <p><strong>Description:</strong> {{ $segment->description }}</p>
  <hr>
  <h2>Related:</h2>
  <p><strong>List owner:</strong> <a href="/admin/users/{{ $segment->owner->id}}">{{ $segment->owner->name }}</a></p>
  <h3>Contacts</h3>
  <ul>
  	@forelse($segment->contacts as $contact)
  		<li><a href="/listmanager/contacts/{{ $contact->id }}">{{ $contact->email }}</a></li>
    @empty
      <i>No records found</i>
  	@endforelse
  </ul>
</div>
<hr>
{{ dump($segment) }}
@endsection