@extends('layouts.master')

@section('main')
<div class="row mb-4">
	<div class="col-10">
		<h1>All your lists</h1>
		<a href="{{ route('listmanager.lists.create') }}" >
			<button type="button" class="btn btn-lg btn-outline-dark float-right">Create New List</button>
		</a>
	</div>
</div>
<div class="row">
	<div class="col-10">
		<table class="table table-sm table-bordered">
			<thead class="thead-light">
				<tr>
					<th scope="col">List Name</th>
					<th scope="col">List Description</th>
					<th scope="col">Active Contacts</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@forelse($lists as $list)
				<tr>
					<td>
						<a href="{{ route('listmanager.lists.show', [$list->id]) }}">
							{{ $list->list_name }}
						</a>
					</td>
					<td>{{ $list->list_description }}</td>
					<td>{{ $list->getActiveUserCount() }}</td>
					</a>
					<td>
						<b-dropdown id="lists-index-dropdown" text="Edit" class="m-md-2" size="sm" block>
							<b-dropdown-item href="{{ route('listmanager.lists.edit', [$list->id]) }}">
								Edit List
							</b-dropdown-item>
							<b-dropdown-item href="{{ route('listmanager.lists.upload', [$list->id]) }}">
								Upload Contacts
							</b-dropdown-item href="{{ route('listmanager.lists.delete', [$list->id]) }}">
							<b-dropdown-divider></b-dropdown-divider>
							<b-dropdown-item>
								Delete list
							</b-dropdown-item>
						</b-dropdown>
					</td>
				</tr>
				@empty
				<i>No records found</i>
				@endforelse
			</tbody>
		</table>
	</div>
</div>

@endsection

@push('custom-scripts')

@endpush