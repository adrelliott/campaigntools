@extends('apps._layouts.withSidebar')


@section('title')
    <h1 class="float-left">List details</h1>
    <a href="{{ route('listmanager.contacts.create', ['listId' => $list->id]) }}" class="btn btn-lg btn-primary float-right">Add Contacts</a>
    <a href="{{ route('listmanager.lists.edit', $list->id) }}" class="btn btn-lg btn-outline-secondary float-right mr-2">Edit this List</a>
    <div class="clearfix"></div>
    <h3 class="mt-3">List Name: <span class="text-muted">{{ $list->list_name }}</span></h3>
@endsection


@section('body')
        <p class="text-muted">{{ $list->getActiveContactCount() }} active contacts found</p>
        @include('apps.listmanager.contacts.contactsTable')
@endsection


@section('sidebar')
    <h3 class="">List Details</h3>
    <hr >
    <p class="mt-3 mb-0"><strong>Name:</strong> {{ $list->list_name }}</p>
    <p class="mt-3 mb-0"><strong>Description:</strong> {{ $list->list_description }}</p>
    <hr class="mb-3">
    <p class="mb-0"><strong>Created:</strong> {{ $list->created_at }}</p>
    <p class="mb-0"><strong>Updated:</strong> {{ $list->created_at }}</p>
    <hr class="mb-3">
    <p class="mb-0"><strong>Total Contacts:</strong> {{$list->getTotalContactCount()}}</p>
    <p class="mb-0"><strong>Verified Contacts:</strong> {{$list->getActiveContactCount()}}</p>
    <p class="mb-0"><strong>Unsusbcribed Contacts:</strong> {{$list->getSuppressedContactCount()}}</p>
@endsection

