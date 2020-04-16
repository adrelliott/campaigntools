<?php

namespace App\Listmanager;

use App\User;
use App\Listmanager\Contact;
// use App\Listmanager\Segment;

use App\Traits\ContactableTrait;
use App\Traits\MultitenantableTrait;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ListModel extends Model
{
	use MultitenantableTrait, SoftDeletes;

    // Allow us to relate Issues to contacts (using polymorphic relationship)
    use ContactableTrait;

    // PHP doesn't allow a class called 'list
    protected $table = 'lists';

    // Allow mass assignment for:
    protected $fillable = [
        'list_name', 
        'list_description'
    ];


    // ***** DEFINE METHODS
    public function getOwner()
    {
    	return $this->user();
    }

    // Count contacts that:
    // - HAVE been verfified (verified_at is not NULL)
    // - HAVE NOT been supressed (supressed_at is NULL)
    public function getActiveUsers()
    {
        $activeUsers = $this->getContacts()
            ->whereNotNull('verified_at')
            ->whereNull('supressed_at');
        return $activeUsers->count();
    }

    // SEE ALSO: ContactableTrait for other methods



    // ***** DEFINE RELATIONSHIPS
    // A list belongs to just one user
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    // SEE ALSO: ContactableTrait
}
