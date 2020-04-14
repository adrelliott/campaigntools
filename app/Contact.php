<?php

namespace App\Listmanager;

use App\Inboxmag\Article;
use App\Inboxmag\Magazine;
use App\User;
use App\Listmanager\Segment;
use App\Listmanager\Tag;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Contact extends Model
{
    use SoftDeletes;

    public static $searchable = [
        'last_name',
        'first_name',
        'postal_code',
        'email_address',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'verified_at',
        'supressed_at',
    ];

    protected $fillable = [
        'last_name',
        'first_name',
        'created_at',
        'updated_at',
        'deleted_at',
        'postal_code',
        'verified_at',
        'supressed_at',
        'email_address',
        'created_by_id',
    ];

    // ******* DEFINE RELATIONSHIPS ********
        
        // Each contact can only belong to one user
    public function owner()
    {
        // return $this->belongsToThrough(User::class, Segment::class);
        // return $this->belongsTo(User::class);

    }

    // A contact may belong to many lists
    public function segments()
    {
        return $this->belongsToMany(Segment::class);

    }


        // A contact can have many tags, and a tag can have many contacts
    public function tags()
    {
        return $this->belongsToMany(Tag::class);

    }

        // A contact can subscribe to many magazines, and a magazine can have many contacts
    public function subscribesTo()
    {
        return $this->belongsToMany(Magazine::class, 'contact_magazine', 'magazine_id', 'contact_id');
    }


    public function hasClicked()
    {
        return $this->belongsToMany(Article::class, 'article_contact', 'article_id', 'contact_id');

    }

    

    // GETTERS AND SETTERS AND ALL THAT JAZZ

    public function getSupressedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;

    }

    public function setSupressedAtAttribute($value)
    {
        $this->attributes['supressed_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;

    }

    public function getVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;

    }

    public function setVerifiedAtAttribute($value)
    {
        $this->attributes['verified_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;

    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');

    }

}
