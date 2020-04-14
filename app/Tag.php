<?php

namespace App\Listmanager;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function tagOwner() 
    {
    	return $this->belongsToMany(Contact::class, 'contact_tag', 'tag_id', 'contact_id');
    }
}
