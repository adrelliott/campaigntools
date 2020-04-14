<?php

namespace App\Listmanager;

use App\Listmanager\Contact;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    
    // A list belongs to just one user
	public function owner()
	{
		return $this->belongsTo(User::class, 'user_id');
	} 

	// Get contacts on this list
	public function contacts()
	{
		return $this-> belongsToMany(Contact::class);
	}
}
