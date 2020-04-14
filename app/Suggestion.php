<?php

namespace App\Inboxmag;

use App\Inboxmag\Article;

use App\Traits\LikeableTrait;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{

    // Allow us to put Suggestions in categories (using polymorphic relationship)
    use LikeableTrait;

	// One suggestion can be used in many articles
    public function articles()
    {
    	return $this->hasMany(Article::class);
    }
}
