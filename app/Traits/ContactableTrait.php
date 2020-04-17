<?php

namespace App\Traits;
use App\Contact;

trait ContactableTrait {

	// DEFINE THE METHODS
	// Relate a contact to a model. Accepts collections, array of IDs or single instance
	public function addContacts($contacts)
	{
		return $this->contactable()->attach($contacts);
	}

	// Unrelate contact(s) from a model. Accepts collections, array of IDs or single instance
	public function removeContacts($contacts)
	{
		return $this->contactable()->detach($contacts);
	}

	// Get all contacts associated with this model
	public function getContacts()
	{
		return $this->contactable();
	}
	

	// ***** DEFINE THE RELATIONSHIP
	// An article can belong to many categories in a polymorphic relationship
	public function contactable()
	{
		return $this->morphToMany(Contact::class, 'contactable')->withTimestamps();
	}
	
}