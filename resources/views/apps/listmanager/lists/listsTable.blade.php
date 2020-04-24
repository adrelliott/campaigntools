<table class="table">
	<thead class="thead-light w-auto">
		<tr>
			<th scope="col">List Name</th>
			<th scope="col">List Description</th>
			<th scope="col">Active Contacts</th>
			<th scope="col">Last Updated</th>
			<th scope="col"></th>
		</tr>
	</thead>
	<tbody>
		@forelse($lists as $list)
		<tr>
			<td>{{ $list->list_name }}</td>
			<td>{{ $list->list_description }}</td>
			<td>{{ $list->getActiveContactCount() }}</td>
			<td>{{ $list->updated_at }}</td>
			<td class="text-right">
				<a href="{{ route('listmanager.lists.edit', [$list->id]) }}">
					<button class="btn btn-sm btn-primary">EDIT LIST</button>
				</a>
				<a href="{{ route('listmanager.lists.show', [$list->id]) }}">
					<button class="btn btn-sm btn-secondary">VIEW LIST</button>
				</a>
			</td>
		</tr>
		@empty
		<div class="alert alert-info">
	        <p class="lead mb-0">
	        	<strong>No lists found.</strong> <a href="{{ route('listmanager.lists.create') }}">Add one here...</a>
	        </p>
	    </div>
		@endforelse
	</tbody>
</table>
<div class="float-right pr-4 mt-3">
	{{ $lists->links() }}
</div>
<div class="clearfix"></div>