<?php

namespace App;

use App\Traits\MultitenantableTrait;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use MultitenantableTrait, SoftDeletes, Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'email_verified_at',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // ****** DEFINE METHODS
    // Determine if the $this->email_verified_at has a date or not
    public function getVerifiedAttribute($value)
    {
        return ($this->email_verified_at) ? "Yes" : "No";
    }

    // Return a readable version of the timestamp
    public function getCreatedAtAttribute($value)
    {
        return Carbon::create($value)->toFormattedDateString();
    }


    // ***** DEFINE RELATIONSHIPS
    // A user has one role
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
 
    // A user has access to many modules
    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }
}
