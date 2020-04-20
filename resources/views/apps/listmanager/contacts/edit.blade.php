@extends('apps._layouts.withSidebar')


@section('title')
	<h1 class="float-left">Edit this Contact</h1>
	<h3 style="color:red"> NOT FINISHED THIS PAGE</h3>
	<a href="{{ route('listmanager.lists.upload') }}" >
		<button type="button" class="btn btn-lg btn-primary float-right">Upload in Bulk</button>
	</a>
	<div class="clearfix"></div>
@endsection


@section('body')
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
					</select>
				</div>
			</div>
		</div>
		<div class="pt-3">
			<div class="float-right">
				<a class="btn btn-lg btn-outline-secondary" href="{{ route('listmanager.contacts.index') }}">Cancel & Return</a>
				<button type="submit" class="btn btn-lg btn-primary">Save & Continue</button>
			</div>	
		</div>	
		<div class="clearfix"></div>
	</form>
@endsection

@section('sidebar')
	<h3 class="">Creating a Contact</h3>
	<hr>
	<p class=""><strong>List Name:</strong> Keep it short but descriptive. (Nobody sees this except you).</p>
	<p class="pl-3"><em>E.g. 'All Paying Customers'</em></p>
	<p class=""><strong>List Description:</strong> You can explain where the list came from, or perhaps why the list exists.</p>
	<p class="pl-3"><em>E.g. 'This is for customer who have actually paid me some money!'</em></p>
@endsection

@section('main33')
<div class="row">
	<div class="col-8">
		<div class="bg-white rounded border p-3">
			
			
		</div>
	</div>
	<div class="col bg-secondary rounded border-dark p-3">
		
	</div>
</div>
@endsection