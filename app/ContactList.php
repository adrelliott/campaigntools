<?php

namespace App\Listmanager;

use App\Listmanager\Contact;
use App\User;
use Illuminate\Database\Eloquent\Model;

class ContactList extends Model
{
	public $table = 'lists';
    
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
