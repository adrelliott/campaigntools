<?php

namespace App;

use App\Traits\CategorisableTrait;
use App\Traits\ContactableTrait;
use App\Traits\MultitenantableTrait;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
	use MultitenantableTrait, SoftDeletes;

    // Allow us to put Suggestions in categories (using polymorphic relationship)
    use CategorisableTrait;


    // Allow us to relate Suggestions to contacts (using polymorphic relationship)
    use ContactableTrait;

	// One suggestion can be used in many articles
    public function article()
    {
    	return $this->belongsTo(Article::class);
    }

}
