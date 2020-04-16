<table class="table table-bordered" id="data-table">
	<thead>
		<tr>
			<th>Id</th>
			<th>First Name</th>
			<th>Email</th>
			<th>Created At</th>
			<th>Updated At</th>
		</tr>
	</thead>
</table>

@push('plugin-styles')
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush

@push('plugin-scripts')
	<!-- jQuery -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- DataTables -->
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<!-- App scripts -->
@endpush

@push('custom-scripts')
	<script>
		$(function() {
	        $('#data-table').DataTable({
	            processing: true,
	            serverSide: true,
	            ajax: '{{ route('listmanager.data') }}',
	            columns: [
		            { data: 'id', name: 'id' },
		            { data: 'name', name: 'name' },
		            { data: 'email', name: 'email' },
		            { data: 'created_at', name: 'created_at' },
		            { data: 'updated_at', name: 'updated_at' }
		        ]
	        });
	    });
</script>
@endpush
