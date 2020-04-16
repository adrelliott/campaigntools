<?php

namespace App\Listmanager;

use App\Traits\CategorisableTrait;
use App\Traits\ContactableTrait;
use App\Traits\MultitenantableTrait;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
	use MultitenantableTrait, SoftDeletes;
	
    // Allow us to put Tags in categories (using polymorphic relationship)
    use CategorisableTrait;

    // Allow us to relate to a contact (using polymorphic relationship)
    use ContactableTrait;


    // ***** DEFINE METHODS
    // SEE ALSO: methods in Contactable triat
   

    // ***** DEFINE RELATIONSHIPS
    // SEE ALSO: Traits/ContactableTrait.php

}
