<?php

namespace App\Traits;
use App\Inboxmag\Contact;

trait ContactableTrait {

	// // Relate a contact to a model. Accepts collections, array of IDs or single instance
	// public function relateToContact($contact)
	// {
	// 	return $this->contactable()->attach($contact);
	// }

	// // An article can belong to many categories in a polymorphic relationship
	// public function contactable()
	// {
	// 	return $this->morphToMany(Contact::class, 'contactable')->withTimestamps();
	// }
	
}