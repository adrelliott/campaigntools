<?php

namespace App\Listmanager;

use App\Traits\LikeableTrait;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	
    // Allow us to put Tags in categories (using polymorphic relationship)
    use LikeableTrait;

    public function contacts() 
    {
    	return $this->belongsToMany(Contact::class);
    }
}
