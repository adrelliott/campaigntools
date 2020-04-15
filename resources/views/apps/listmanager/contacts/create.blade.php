@extends('layouts.master')

@section('main')
<div class="row">
	<div class="col-8">
		<div class="bg-white rounded border p-3">
			<h2 class="mb-3">Create a Contact</h2>
			<form>
				<div class="form-group">
					<label for="contactFirstName">First Name</label>
					<input type="text" class="form-control" id="contactFirstName" value="contactFirstName">
				</div>
				<div class="form-group">
					<label for="contactLastName">Last Name</label>
					<input type="text" class="form-control" id="contactLastName" value="contactLastName">
				</div>
				<div class="form-group">
					<label for="contactEmail">Email address</label>
					<input type="email" class="form-control" id="contactEmail" aria-describedby="emailHelp" value="contactEmail">
				</div>
				<div class="form-group">
					<label for="contactPostalcode">Postal Code</label>
					<input type="text" class="form-control" id="contactPostalcode" value="contactPostalCode">
				</div>
				<div class="form-group">
					<label for="contactList">Select list(s)</label>
					<select class="form-control" id="contactList"  value="contactList">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
	<div class="col bg-secondary rounded border-dark p-3">
		<h3 class="text-light">Explainer</h3>
		<p class="text-light">Create a contact here</p>
	</div>
</div>
@endsection