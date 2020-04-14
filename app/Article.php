<?php

namespace App\Inboxmag;

use App\Inboxmag\Category;
use App\Inboxmag\Suggestion;
use App\Inboxmag\Issue;
use App\Listmanager\Contact;

use App\Traits\CategorisableTrait;
use App\Traits\ContactableTrait;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    // Allow us to put Articles in categories (using polymorphic relationship)
    use CategorisableTrait;

    // Allow us to relate Articles to contacts (using polymorphic relationship)
    use ContactableTrait;

 	// ******* CREATE RELATIONSHIP MODIFIER METHODS ********
    public function addReader($contact)
    {
    	return $this->readers()->attach($contact);
    }

    public function claimSuggestion($suggestion)
    {
    	// return $this->suggestion()->
    }

    // ****** DEFINE RELATIONSHIPS

	// An article belongs to one issue
	public function issue()
	{
		return $this->belongsTo(Issue::class);
	}

	// An article hasOne (is formed from) one suggestion
	public function suggestion()
	{
		return $this->hasOne(Suggestion::class);
	}

	// An article hasMany contacts clicking on it.
	 // Defined via polymorphic relationship on table contactables
    public function readers()
    {
        return $this->morphedToMany(Contact::class, 'contactable')->withTimestamps();
    }
	

}
