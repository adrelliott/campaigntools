<?php

namespace App;

use App\Listmanager\ListModel;
use App\Listmanager\Contact;
use App\Inboxmag\Magazine;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use Softdeletes;

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


    // ***** DEFINE RELATIONSHIPS

    // One user can have many lists, but a list can belong to just one user
    public function lists()
    {
        return $this->hasMany(ListModel::class);
    }

    // One user has many contacts (via the user_id col on every contact row)
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    // An owner has many magazines
    public function magazines()
    {
        return $this->hasMany(Magazine::class);
    }
}
