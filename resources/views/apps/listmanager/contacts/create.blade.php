@extends('layouts.master')

@section('main')
<div class="row">
	<div class="col-8">
		<div class="bg-white rounded border p-3">
			<h2 class="mb-3">Create a Contact</h2>
			<form>
				<div class="form-row">
					<div class="col">
						<div class="form-group">
							<label for="contactFirstName">First Name</label>
							<input type="text" class="form-control" id="contactFirstName" value="">
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="contactLastName">Last Name</label>
							<input type="text" class="form-control" id="contactLastName" value="">
						</div>
					</div>	
				</div>
				<div class="form-group">
					<label for="contactEmail">Email address</label>
					<input type="email" class="form-control" id="contactEmail" aria-describedby="emailHelp" value="">
				</div>
				<div class="form-row">
					<div class="col-4">
						<div class="form-group">
							<label for="contactPostalcode">Postal Code</label>
							<input type="text" class="form-control" id="contactPostalcode" value="">
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="contactList">Select list(s)</label>
							<select class="form-control" id="contactList"  value="">

								@forelse ($lists as $id => $name)
									<option value="{{ $id }}">{{ $name }}</option>
								@empty
									<strong>No list</strong>
								@endforelse
								
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
					</div>
				</div>
				
				<button type="submit" class="btn btn-lg btn-primary float-right">Save Contact</button>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
	<div class="col bg-secondary rounded border-dark p-3">
		<h3 class="text-light">Explainer</h3>
		<p class="text-light">Create a contact here</p>
	</div>
</div>
@endsection