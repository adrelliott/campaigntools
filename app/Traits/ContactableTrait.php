<?php

namespace App\Traits;
use App\Listmanager\Contact;

trait ContactableTrait {

	// Relate a contact to a model. Accepts collections, array of IDs or single instance
	public function addContacts($contacts)
	{
		return $this->contactable()->attach($contact);
	}

	// Get all contacts associated with this model
	public function getContacts()
	{
		return $this->contactable();
	}

	// An article can belong to many categories in a polymorphic relationship
	public function contactable()
	{
		return $this->morphToMany(Contact::class, 'contactable')->withTimestamps();
	}
	
}