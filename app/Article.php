<?php

namespace App\Inboxmag;

use App\Inboxmag\Category;
use App\Inboxmag\Suggestion;
use App\Inboxmag\Issue;
use App\Listmanager\Contact;

use App\Traits\CategorisableTrait;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    // Allow us to put Articles in categories (using polymorphic relationship)
    use CategorisableTrait;

	// One article belngs to one issue
	public function issue()
	{
		return $this->belongsTo(Issue::class);
	}

	// One article belongs to (is formed from) one suggestion
	public function suggestion()
	{
		return $this->belongsTo(Suggestion::class);
	}

	// One article can have many contacts clicking on it
	public function readers()
	{
		return $this->belongsToMany(Contact::class, 'article_contact', 'contact_id', 'role_id');
	}
	
	// // Add a category - can we supply a collection?
	// public function addCategory($category)
	// {
	// 	return $this->categorise()->attach($category);
	// }

	// // An article can belong to many categories in a polymorphic relationship
	// public function categorise()
	// {
	// 	return $this->morphToMany(Category::class, 'categorisable')->withTimestamps();
	// }
}
