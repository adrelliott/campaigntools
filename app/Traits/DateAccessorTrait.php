<?php

namespace App\Traits;

use Carbon\Carbon;

trait DateAccessorTrait {

	// Return a readable version of the timestamp
    public function getCreatedAtAttribute($value)
    {
        return Carbon::create($value)->toFormattedDateString();
    }

    // Return a readable version of the timestamp
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::create($value)->toFormattedDateString();
    }
    
}