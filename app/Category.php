<?php

namespace App\Inboxmag;

use App\Inboxmag\Article;

use App\Traits\ContactableTrait;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    // Allow us to relate Articles to contacts (using polymorphic relationship)
    use ContactableTrait;
	
    
}
