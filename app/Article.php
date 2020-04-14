<?php

namespace App\Inboxmag;

use App\Inboxmag\Category;
use App\Inboxmag\Suggestion;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // An article can have many Categories
	public function categories()
	{
		return $this-> hasMany(Category::class, 'category_id');
	}

	// 
	public function suggestion()
	{
		return $this->belongsTo(Suggestion::class);
	}
}
