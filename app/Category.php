<?php

namespace App;

use App\Traits\ContactableTrait;
use App\Traits\MultitenantableTrait;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use MultitenantableTrait, SoftDeletes;

    // Allow us to relate Articles to contacts (using polymorphic relationship)
    use ContactableTrait;
	
    
}
