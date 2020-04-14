<?php

namespace App\Inboxmag;

use App\Inboxmag\Magazine;
use App\Inboxmag\Article;

use App\Traits\CategorisableTrait;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{

    // Allow us to put Issues in categories (using polymorphic relationship)
    use CategorisableTrait;


    public function magazine()
    {
    	return $this->belongsTo(Magazine::class);
    }

    public function articles()
    {
    	return $this->belongsToMany(Article::class);
    }
}
