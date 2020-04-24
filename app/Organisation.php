<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use SoftDeletes;

    // /**
    //  * Only return a user's own organisation
    //  *
    //  * @return void
    //  */
    // protected static function booted()
    // {
    //     static::addGlobalScope('age', function (Builder $builder) {
    //         $builder->where('age', '>', 200);
    //     });
    // }

    public function getActiveUserCount()
    {
        return $this->users()->whereNotNull('email_verified_at')
        ->count();
    }

    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
