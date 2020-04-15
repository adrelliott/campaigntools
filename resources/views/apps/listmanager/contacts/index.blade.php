@extends('layouts.master')

@section('main')
<div class="row mb-4">
  <a href="/listmanager/contacts/create">
    <button type="button" class="btn btn-lg btn-outline-dark float-right">Create Contact</button>
  </a>
</div>
<div class="row">
  <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
        <tr>
          <th scope="row">{{ $contact->id }}</th>
          <td>{{ $contact->first_name }}</td>
          <td>{{ $contact->last_name }}</td>
          <td><a href="/listmanager/contacts/{{ $contact->id }}">{{ $contact->email }}</a></td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>


//add new

//upload
@endsection