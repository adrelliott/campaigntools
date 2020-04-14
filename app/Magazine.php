<?php

namespace App\Inboxmag;

use App\Inboxmag\Issue;
use App\Listmanager\Contact;
use App\User;

use App\Traits\LikeableTrait;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    
    // Allow us to put magazines in categories (using polymorphic relationship)
    use LikeableTrait

    // A magazine can have many issues
    public function issues()
    {
    	return $this->hasMany(Issue::class);
    }

    public function subscribers()
    {
    	return $this->belongsToMany(Contact::class, 'contact_magazine', 'magazine_id', 'contact_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sources()
    {
    	// return $this->hasMany(Source::class);
    }
}
