<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait MultitenantableTrait {

	// Hook into the boot and scope by organisation_id 
	public static function bootMultitenantableTrait()
	{
		if ( auth()->check() ) {
			// Add org ID to every record created
			static::creating(function ($model) {
				$model->organisation_id = auth()->user()->organisation_id;
			});

			// Now restrict all queiries to just those rows belonging to the organisation
			if ( auth()->user()->role_id != 4 ) {
				static::addGlobalScope('organisation_id', function(Builder $builder) {
				return $builder->where(
					'organisation_id', 
					auth()->user()->organisation_id
				);
			});	
			} 
		}
	}
}