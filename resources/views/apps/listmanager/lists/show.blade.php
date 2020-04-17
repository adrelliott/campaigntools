@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show list details</h1>
  <p><strong>ID:</strong> {{ $list->id }}</p>
  <p><strong>Name:</strong> <a href="/listmanager/lists/{{ $list->id}}">{{ $list->list_name }}</a></p>
  <p><strong>Description:</strong> {{ $list->description }}</p>
  <hr>
  <h2>Related:</h2>
  <p><strong>List owner:</strong> <a href="/admin/users/{{ $list->getOwner->id}}">{{ $list->getOwner->name }}</a></p>
  <h3>Contacts</h3>
  <ol>
  	@forelse($list->getContacts as $contact)
  		<li><a href="/listmanager/contacts/{{ $contact->id }}">[{{ $contact->id }}] {{ $contact->email }}</a></li>
    @empty
      <i>No records found</i>
  	@endforelse
  </ol>
</div>
<hr>
{{ dump($list) }}
@endsection