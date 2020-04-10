<?php

namespace App\Listmanager;

use App\Listmanager\Contact;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{

    
    // A list belongs to just one user
	public function listOwner()
	{
		return $this->belongsTo(User::class);
	}

	// Get contacts on this list
	public function contacts()
	{
		return $this-> belongsToMany(Contact::class, 'contact_list', 'list_id');
	}
}
