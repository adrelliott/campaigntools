<?php

namespace App\Inboxmag;

use App\Inboxmag\Issue;
use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    // A magazine can have many issues
    public function issues()
    {
    	return $this->hasMany(Issue::class);
    }
}
