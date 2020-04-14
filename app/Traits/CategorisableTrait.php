<?php

namespace App\Traits;
use App\Inboxmag\Category;

trait CategorisableTrait {

	// Add a category. Accepts collections, array of IDs or single instance
	public function addCategory($category)
	{
		return $this->categorise()->attach($category);
	}

	// An article can belong to many categories in a polymorphic relationship
	public function categorise()
	{
		return $this->morphToMany(Category::class, 'categorisable')->withTimestamps();
	}
	
}