<?php

namespace App\Listmanager;

use App\Listmanager\Contact;
use App\User;

use App\Traits\CategorisableTrait;
use App\Traits\ContactableTrait;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{

    // Allow us to put Segments in categories (using polymorphic relationship)
    use CategorisableTrait;

    // Allow us to relate Segments to contacts (using polymorphic relationship)
    use ContactableTrait;
    
    // Add one or more contacts
    public function addContacts($contacts)
    {
    	return $this->contacts()->attach($contacts);
    }


    // A list belongs to just one user
	public function owner()
	{
		return $this->belongsTo(User::class, 'user_id');
	} 

	public function contacts()
	{
		return $this->morphToMany(Contact::class, 'contactable');
	}

	// Get contacts on this list
	// public function contacts()
	// {
	// 	return $this-> belongsToMany(Contact::class);
	// }
}
