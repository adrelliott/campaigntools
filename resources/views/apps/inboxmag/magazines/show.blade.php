@extends('layouts.master')

@section('main')
<div class="jumbotron">
  <h1>Show magazine details</h1>
  <p><strong>ID:</strong> {{ $magazine->id }}</p>
  <p><strong>Name:</strong> {{ $magazine->magazine_name }}</p>
  <p><strong>Description:</strong> {{ $magazine->magazine_description }}</p>
  <p><strong>Sector:</strong> {{ $magazine->sector }}</p>
  <p><strong>Publish schedule:</strong> {{ $magazine->publish_time }} on {{ $magazine->publish_day }}</p>
  <p><strong>User ID:</strong> {{ $magazine->user_id }}</p>
  <hr>
  <h2>Related:</h2>
  <p><strong>Owner:</strong> <a href="/admin/users/{{ $magazine->owner->id }}">{{ $magazine->owner->name }}</a></p>
  <h3>Issues</h3>
  <ol>
    @forelse($magazine->issues as $issue)
      <li><a href="/inboxmag/issues/{{ $issue->id }}">{{ $issue->issue_name }}</a></li>
    @empty
      <i>No records found</i>
    @endforelse
  </ol>
  <h3>Subscribers</h3>
  <ol>
    @forelse($magazine->subscribers as $subscriber)
      <li><a href="/listmanager/contacts/{{ $subscriber->id }}">{{ $subscriber->first_name }} {{ $subscriber->last_name }} ({{ $subscriber->email }})</a></li>
    @empty
      <i>No records found</i>
    @endforelse
  </ol>
</div>
<hr>
{{ dump($magazine) }}
@endsection