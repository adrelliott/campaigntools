<?php

namespace App\Listmanager;

use App\User;
use App\Listmanager\Contact;
// use App\Listmanager\Segment;

use App\Traits\ContactableTrait;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListModel extends Model
{
	use Softdeletes;
	use ContactableTrait;

    // PHP doesn't allow a class called 'list
    protected $table = 'lists';

    // Allow mass assignment for:
    protected $fillable = [
        'list_name', 'list_description'
    ];


    // ***** DEFINE METHODS
    public function getOwner()
    {
    	return $this->user();
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
