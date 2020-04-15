<?php

namespace App\Inboxmag;

use App\Inboxmag\Category;
use App\Inboxmag\Suggestion;
use App\Inboxmag\Issue;
use App\Listmanager\Contact;

use App\Traits\CategorisableTrait;
use App\Traits\ContactableTrait;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    // Allow us to put Articles in categories (using polymorphic relationship)
    use CategorisableTrait;

    // Allow us to relate Articles to contacts (using polymorphic relationship)
    use ContactableTrait;

 	// ******* CREATE RELATIONSHIP MODIFIER METHODS ********

    // Get all reader(s) of an article (in other words, who's clicked on it)
    // Wrapper for the method on ContactableTrait
    public function getReaders()
    {
        return $this->getContacts();
    }

    // Add reader(s) to an article (in other words, who's clicked on it)
    // Wrapper for the method on ContactableTrait
    public function addReaders($contacts)
    {
    	return $this->addContacts($contacts);
    }

    // Remove reader(s) from an article (in other words, who's clicked on it)
    // Wrapper for the method on ContactableTrait
    public function removeReaders($contacts)
    {
        return $this->removeContacts($contacts);
    }
    
    // Get all reader(s) of an article (in other words, who's clicked on it)
    // Wrapper for the method on ContactableTrait
    public function getSuggestion()
    {
        return $this->suggestion();
    }

    // Associate a suggestion to an article (one:one relationship)
    public function claimSuggestion($suggestion)
    {
    	return $this->suggestion()->associate($suggestion);
    }
    
    // Disassociate a suggestion to an article (one:one relationship)
    public function removeSuggestion($suggestion)
    {
        return $this->save(['suggestion_id' => NULL]);
        // return $this->suggestion()->detach($suggestion);
    }



    // ****** DEFINE RELATIONSHIPS

	// An article belongs to one issue
	public function issue()
	{
		return $this->belongsTo(Issue::class);
	}

	// An article hasOne (is formed from) one suggestion
	public function suggestion()
	{
		return $this->belongsTo(Suggestion::class);
	}

}
