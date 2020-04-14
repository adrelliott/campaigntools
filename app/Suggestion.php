<?php

namespace App\Inboxmag;

use App\Inbox\Article;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    public function article()
    {
    	$this->belongsToMany(Article::class);
    }
}
