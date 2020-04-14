<?php

namespace App\Listmanager;

use App\Traits\CategorisableTrait;
use App\Traits\ContactableTrait;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	
    // Allow us to put Tags in categories (using polymorphic relationship)
    use CategorisableTrait;

    // Allow us to relate tags to contacts (using polymorphic relationship)
    use ContactableTrait;

    public function contacts()
    {
    	return $this->morphToMany(Contact::class, 'contactable');
    }

    // public function contacts() 
    // {
    // 	return $this->belongsToMany(Contact::class);
    // }

    // // Add a tag using the Contactable Trait
    // public function addContact($contact)
    // {
    // 	$this->relateToContact($contact);
    // }
}
