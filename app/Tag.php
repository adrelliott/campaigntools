<?php

namespace App\Listmanager;

use App\Traits\CategorisableTrait;
use App\Traits\ContactableTrait;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	
    // Allow us to put Tags in categories (using polymorphic relationship)
    use CategorisableTrait;

    // Allow us to relate to a contact (using polymorphic relationship)
    use ContactableTrait;


    // ***** DEFINE METHODS
    // SEE ALSO: methods in Contactable triat
   

    // ***** DEFINE RELATIONSHIPS
    // SEE ALSO: Traits/ContactableTrait.php

}
