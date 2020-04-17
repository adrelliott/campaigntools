@extends('layouts.master')

@section('main')
<div class="row mb-4">
	<a href="{{ route('listmanager.lists.create') }}">
		<button type="button" class="btn btn-lg btn-outline-dark float-right">Create New List</button>
	</a>
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
				<td>
					<a href="{{ route('listmanager.lists.show', [$list->id]) }}">
						{{ $list->list_name }}
					</a>
				</td>
				<td>{{ $list->list_description }}</td>
				<td>{{ $list->getActiveUserCount() }}</td>
				</a>
				<td>
					<div class="dropdown show">
						<b-dropdown id="dropdown-1" text="Dropdown Button" class="m-md-2">
							<b-dropdown-item>First Action</b-dropdown-item>
							<b-dropdown-item>Second Action</b-dropdown-item>
							<b-dropdown-item>Third Action</b-dropdown-item>
							<b-dropdown-divider></b-dropdown-divider>
							<b-dropdown-item active>Active action</b-dropdown-item>
							<b-dropdown-item disabled>Disabled action</b-dropdown-item>
						</b-dropdown>
						
					</div>
				</td>
			</tr>
			@empty
			<i>No records found</i>
			@endforelse
		</tbody>
	</table>
</div>
@endsection
<!-- <a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" id="listActionMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Make Changes
						</a> -->
						<div class="dropdown-menu" aria-labelledby="listActionMenuLink">
							<a class="dropdown-item" href="{{ route('listmanager.lists.edit', [$list->id]) }}">
								<i class="fas fa-edit"></i> Edit List
							</a>
							<a class="dropdown-item" href="{{ route('listmanager.lists.upload', [$list->id]) }}">
								<i class="fas fa-file-upload"></i> Upload Contacts
							</a>
							<a class="dropdown-item text-danger" href="{{ route('listmanager.lists.delete', [$list->id]) }}">
								<i class="fas fa-exclamation-triangle"></i> Delete List
							</a>
						</div>