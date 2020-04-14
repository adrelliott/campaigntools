<?php

namespace App;

use App\Listmanager\Segment;
use App\Listmanager\Contact;
use App\Inboxmag\Magazine;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // One user can have many lists, but a list can belong to just one user
    public function segments()
    {
        return $this->hasMany(Segment::class);
    }

    // A contact belongs to a list, and a list belongs to a user
    // We can list all contacts belonging to a user here
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    // An owner has many magazines
    public function magazines()
    {
        return $this->hasMany(Magazine::class, 'user_id');
    }
}
