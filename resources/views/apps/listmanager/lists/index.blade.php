@extends('layouts.master')

@section('main')
<div class="row mb-4">
  <a href="/listmanager/lists/create">
    <button type="button" class="btn btn-lg btn-outline-dark float-right">Create New List</button>
  </a>
</div>
<div class="row">
  @include('apps.listmanager.datatables.lists')
</div>


//add new

//upload
@endsection