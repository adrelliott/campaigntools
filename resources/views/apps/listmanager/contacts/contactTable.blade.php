<table class="table">
	<thead class="thead-light w-auto">
		<tr>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">Postcode</th>
			<th scope="col">Status</th>
			<th scope="col"></th>
		</tr>
	</thead>
	<tbody>
		@forelse($contacts as $contact)
		<tr>
			<td>{{ $contact->getFullName() }}</td>
			<td>{{ $contact->email }}</td>
			<td>{{ $contact->postal_code }}</td>
			<td>{{ $contact->getContactStatus() }}</td>
			<td class="text-right">
				<a href="{{ route('listmanager.contacts.show', [$contact->id]) }}">
					<button class="btn btn-sm btn-primary">VIEW</button>
				</a>
			</td>
		</tr>
		@empty
		<div class="alert alert-info">
	        <p class="lead mb-0">
	        	<strong>No contacts found.</strong> <a href="{{ route('listmanager.contacts.create') }}">Add some here...</a>
	        </p>
	    </div>
		@endforelse
	</tbody>
</table>
<div class="float-right pr-4 mt-3">
	{{ $contacts->links() }}
</div>
<div class="clearfix"></div>
