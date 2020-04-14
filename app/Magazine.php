<?php

namespace App\Inboxmag;

use App\Inboxmag\Issue;
use App\Listmanager\Contact;
use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    // A magazine can have many issues
    public function issues()
    {
    	return $this->hasMany(Issue::class);
    }

    public function subscribers()
    {
    	return $this->belongsToMany(Contact::class, 'contact_magazine', 'contact_id', 'magazine_id');
    }

    public function sources()
    {
    	// return $this->hasMany(Source::class);
    }
}
