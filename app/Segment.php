<?php

namespace App\Listmanager;

use App\Listmanager\Contact;
use App\User;

use App\Traits\CategorisableTrait;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{

    // Allow us to put Segments in categories (using polymorphic relationship)
    use CategorisableTrait;
    
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
