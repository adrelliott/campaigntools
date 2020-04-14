<?php

namespace App\Inboxmag;

use App\Inbox\Article;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
	// One suggestion can be used in many articles
	// @todo Is this right?
    public function article()
    {
    	$this->belongsToMany(Article::class);
    }
}
