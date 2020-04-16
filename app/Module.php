<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
	protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
    // A module can have many users
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
