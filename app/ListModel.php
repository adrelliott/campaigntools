<?php

namespace App;

use App\Traits\ContactableTrait;
use App\Traits\MultitenantableTrait;
use App\Traits\DateAccessorTrait;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ListModel extends Model
{
	use MultitenantableTrait, DateAccessorTrait, SoftDeletes;

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
        return $this->organisation();
    }

    // Count contacts & ignore those that are either not verified, or supressed
    public function getTotalContactCount()
    {
        return $this->getContacts()->count();
    }

    public function getActiveContactCount()
    {
        $activeContacts = $this->getContacts()
            ->whereNotNull('verified_at')
            ->whereNull('supressed_at');
        return $activeContacts->count();
    }

    public function getSuppressedContactCount()
    {
        $activeContacts = $this->getContacts()
            ->whereNotNull('verified_at')
            ->whereNotNull('supressed_at');
        return $activeContacts->count();
    }

    public function getUnverifiedContactCount()
    {
        $activeContacts = $this->getContacts()
            ->whereNull('verified_at')
            ->whereNull('supressed_at');
        return $activeContacts->count();
    }



    // SEE ALSO: ContactableTrait for other methods


    // ***** DEFINE ACCESSORS & MUTATORS
    public function getListNameAttribute($value)
    {
        return ucfirst($value);
    }


    // ***** DEFINE RELATIONSHIPS
    // A list belongs to just one organisation
    public function organisation()
    {
    	return $this->belongsTo(Organisation::class);
    }

    // SEE ALSO: ContactableTrait
}
