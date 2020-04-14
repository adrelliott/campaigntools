<?php

namespace App\Inboxmag;

use App\Inboxmag\Category;
use App\Inboxmag\Suggestion;
use App\Inboxmag\Issue;
use App\Listmanager\Contact;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // An article can have many Categories
	// public function categories1tomany()
	// {
	// 	return $this-> hasMany(Category::class, 'category_id');
	// }

	// One article belngs to one issue
	public function issue()
	{
		return $this->beongsTo(Issue::class);
	}

	// One article belongs to (is formed from) one suggestion
	public function suggestion()
	{
		return $this->belongsTo(Suggestion::class);
	}

	// One article can have many contacts clicking on it
	public function readers()
	{
		return $this->belongsToMany(Contact::class, 'article_contact', 'contact_id', 'role_id')
			;
	}
}
