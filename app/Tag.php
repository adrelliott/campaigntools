<?php

namespace App\Listmanager;

use App\Traits\CategorisableTrait;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	
    // Allow us to put Tags in categories (using polymorphic relationship)
    use CategorisableTrait;

    public function contacts() 
    {
    	return $this->belongsToMany(Contact::class);
    }
}
