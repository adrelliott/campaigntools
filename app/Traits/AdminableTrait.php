<?php
namespace App\Traits;


// @todo finish this off


trait AdminableTrait {

	// Hook into the boot and scope by organisation_id 
	public static function bootAdminableTrait()
	{
		if ( auth()->check() ) {

			// Make sure it;s an admin or super admin making this change
			static::creating(function ($model) {
				$model->organisation_id = auth()->user()->organisation_id;
			});

			// Now restrict all queiries to just admin or superadmin
			static::addGlobalScope('organisation_id', function(Builder $builder) {
				return $builder->where(
					'organisation_id', 
					auth()->user()->organisation_id
				);
			});
		}
	}
}