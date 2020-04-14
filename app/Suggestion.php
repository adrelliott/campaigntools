<?php

namespace App\Inboxmag;

use App\Inboxmag\Article;

use App\Traits\CategorisableTrait;
use App\Traits\ContactableTrait;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{

    // Allow us to put Suggestions in categories (using polymorphic relationship)
    use CategorisableTrait;


    // Allow us to relate Suggestions to contacts (using polymorphic relationship)
    use ContactableTrait;

	// One suggestion can be used in many articles
    public function articles()
    {
    	return $this->hasMany(Article::class);
    }
}
