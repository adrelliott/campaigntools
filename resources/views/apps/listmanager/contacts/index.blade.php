@extends('apps._layouts.fullWidth')

@section('title')
    <h1 class="float-left">All your Contacts</h1>
    <a href="{{ route('listmanager.contacts.create') }}" >
        <button type="button" class="btn btn-lg btn-primary float-right">Add New Contact(s)</button>
    </a>
    <div class="clearfix"></div>
    <code>This should submit to a nested route - i.e. lists/list->id/contacts/create</code>
@endsection

@section('body')
    <p class="text-muted pl-2">{{ $contacts->count() }} contacts found.</p>
    @include('apps.listmanager.contacts.contactsTable')
@endsection