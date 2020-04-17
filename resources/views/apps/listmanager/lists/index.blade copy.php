@extends('layouts.master')

@section('main')
<div class="row mb-4">
  <a href="/listmanager/lists/create">
    <button type="button" class="btn btn-lg btn-outline-dark float-right">Create New List</button>
  </a>
</div>
<div class="row">
  
</div>
<div class="row">
  <table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">List Name</th>
        <th scope="col">List Description</th>
        <th scope="col">Active Contacts</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    	@forelse($lists as $list)
  		    <tr>
  		      <td><a href="/listmanager/lists/{{ $list->id }}">[{{ $list->id }}] {{ $list->list_name }}</a></td>
            <td>{{ $list->list_description }}</td>
            <td>{{ $list->getActiveUsers() }}</td>
            <td>
              <div class="dropdown show">
              <a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" id="listActionMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Make Changes
              </a>

              <div class="dropdown-menu" aria-labelledby="listActionMenuLink">
                <a class="dropdown-item" href="/listmanager/lists/{{ $list->id }}/edit"><i data-feather="edit" height="10"></i>Edit List</a>
                <a class="dropdown-item" href="/listmanager/lists/{{ $list->id }}/upload"><i data-feather="upload" height="10"></i>Upload Contacts</a>
                <a class="dropdown-item text-danger" href="/listmanager/lists/{{ $list->id }}/delete"><i data-feather="alert-triangle" height="10"></i>Delete List</a>
              </div>
            </div>
            </td>
  		    </tr>
      @empty
        <i>No records found</i>
      @endforelse
    </tbody>
  </table>
</div>

//add new

//upload
@endsection