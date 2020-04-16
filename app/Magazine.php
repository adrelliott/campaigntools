<?php

namespace App\Inboxmag;

use App\Inboxmag\Issue;
use App\Listmanager\Contact;
use App\User;

use App\Traits\CategorisableTrait;;
use App\Traits\ContactableTrait;
use App\Traits\MultitenantableTrait;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    use MultitenantableTrait, SoftDeletes;

    // Allow us to put magazines in categories (using polymorphic relationship)
    use CategorisableTrait;


    // Allow us to relate Magazines to contacts (using polymorphic relationship)
    use ContactableTrait;

    // ***** DEFINE METHODS
    // Uses the method in ContactableTrait
    public function getSubscribers()
    {
        return $this->getContacts();
    }

    // Uses the method in ContactableTrait
    public function addSubscribers($contacts)
    {
        return $this->addContacts($contacts);
    }

    // Uses the method in ContactableTrait
    public function removeSubscribers($contacts)
    {
        return $this->removeContacts($contacts);
    }

    public function getIssues()
    {
        return $this->issues();
    }

    public function addIssues($issues)
    {
        return $this->issues()->saveMany($issues);
    }

    public function removeIssues($issues)
    {
        return $this->issues()->detach($issues);
    }
    


    // ***** DEFINE RELATIONSHIPS
    // A magazine can have many issues
    public function issues()
    {
    	return $this->hasMany(Issue::class);
    }

    // A magazine has one owner
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // A magazine can have many sources ???????????
    public function sources()
    {
    	// return $this->hasMany(Source::class);
    }
}
