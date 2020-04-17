@extends('apps._layouts.standardLayout')


@section('title')
    <h1 class="float-left">List details</h1>
    <a href="{{ route('listmanager.contacts.create') }}" >
        <button type="button" class="btn btn-lg btn-primary float-right">Add Contacts</button>
    </a>
    <div class="clearfix"></div>
@endsection


@section('body')
    <div class="mt-2">
        <p class="text-muted">{{ $list->getActiveUserCount() }} active contacts found</p>
        @include('apps.listmanager.contacts.contactTable')
    </div>
@endsection


@section('sidebar')
    <h3 class="">List Details</h3>
    <hr >
    <p class="mt-3 mb-0"><strong>Name:</strong> {{ $list->list_name }}</p>
    <p class="mt-3 mb-0"><strong>Description:</strong> {{ $list->list_description }}</p>
    <hr class="mb-3">
    <p class="mb-0"><strong>Created:</strong> {{ $list->created_at }}</p>
    <p class="mb-0"><strong>Updated:</strong> {{ $list->created_at }}</p>
    <p class="mb-0"><strong>Verified Contacts:</strong> {{$list->getActiveUserCount()}}</p>
    <p class="mb-0"><strong>Unsusbcribed Contacts:</strong> {{$list->getSuppressedUserCount()}}</p>
@endsection

