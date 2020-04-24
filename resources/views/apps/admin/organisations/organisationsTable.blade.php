<table class="table">
	<thead class="thead-light w-auto">
		<tr>
			<th scope="col">Org Name</th>
			<th scope="col">Website</th>
			<th scope="col">Active Users</th>
			<th scope="col">Last Updated</th>
			<th scope="col"></th>
		</tr>
	</thead>
	<tbody>
		@forelse($organisations as $organisation)
		<tr>
			<td>{{ $organisation->organisation_name }}</td>
			<td>{{ $organisation->organisation_description }}</td>
			<td>{{ $organisation->getActiveUserCount() }}</td>
			<td>{{ $organisation->updated_at }}</td>
			<td class="text-right">
				<a href="{{ route('admin.organisations.edit', [$organisation->id]) }}">
					<button class="btn btn-sm btn-primary">EDIT LIST</button>
				</a>
				<a href="{{ route('admin.organisations.show', [$organisation->id]) }}">
					<button class="btn btn-sm btn-secondary">VIEW LIST</button>
				</a>
			</td>
		</tr>
		@empty
		<div class="alert alert-info">
	        <p class="lead mb-0">
	        	<strong>No organisations found.</strong> <a href="{{ route('admin.organisations.create') }}">Add one here...</a>
	        </p>
	    </div>
		@endforelse
	</tbody>
</table>