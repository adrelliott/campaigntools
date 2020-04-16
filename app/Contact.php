<?php

namespace App\Listmanager;

use App\Inboxmag\Article;
use App\Inboxmag\Magazine;
use App\User;
use App\Listmanager\ListModel;
use App\Listmanager\Segment;
use App\Listmanager\Tag;

use App\Traits\MultitenantableTrait;

use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Contact extends Model
{
    use MultitenantableTrait, SoftDeletes;

    protected $hidden = [
        'verified_at', 'supressed_at',
    ];

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
        'email',
        'postal_code',
        'verified_at',
    ];


    // ******* DEFINE METHODS ********

    public function clickedOn($article)
    {
        return $this->articles()->attach($article);
    }

    public function subscribedTo($magazine)
    {
        return $this->magazines()->attach($magazine);
    }

    public function addToList($list)
    {
        return $this->lists()->attach($list);
    }

    public function addToSegment($segment)
    {
        return $this->segments()->attach($segment);
    }

    public function addTags ($tag)
    {
        return $this->tags()->attach($tag);
    }



    // ******* DEFINE RELATIONSHIPS ********
 
    // Defined via polymorphic relationship on table contactables
    public function articles()
    {
        return $this->morphedByMany(Article::class, 'contactable')->withTimestamps();
    }

    // Defined via polymorphic relationship on table contactables
    public function categories()
    {
        return $this->morphedByMany(Category::class, 'contactable')->withTimestamps();
    }

    // Defined via polymorphic relationship on table contactables
    public function issues()
    {
        return $this->morphedByMany(Issue::class, 'contactable')->withTimestamps();
    }

    // Defined via polymorphic relationship on table contactables
    public function magazines()
    {
        return $this->morphedByMany(Magazine::class, 'contactable')->withTimestamps();
    }

    // Defined via polymorphic relationship on table contactables
    public function lists()
    {
        return $this->morphedByMany(ListModel::class, 'contactable')->withTimestamps();
    }

    // Defined via polymorphic relationship on table contactables
    public function segments()
    {
        return $this->morphedByMany(Segment::class, 'contactable')->withTimestamps();
    }

    // Defined via polymorphic relationship on table contactables
    public function tags()
    {
        return $this->morphedByMany(Tag::class, 'contactable')->withTimestamps();
    }
    
    // Each contact belongs to a segment, and  a segment belongs to one user
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
        // Will add this when we implement the multitenancy
        // return $this->user_id;
    }

    

    // GETTERS AND SETTERS AND ALL THAT JAZZ

    // public function getSupressedAtAttribute($value)
    // {
    //     return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;

    // }

    // public function setSupressedAtAttribute($value)
    // {
    //     $this->attributes['supressed_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;

    // }

    // public function getVerifiedAtAttribute($value)
    // {
    //     return $value;
    //     // return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;

    // }

    // public function setVerifiedAtAttribute($value)
    // {
    //     return $value;
    //     // $this->attributes['verified_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;

    // }

    // protected function serializeDate(DateTimeInterface $date)
    // {
    //     return $date->format('Y-m-d H:i:s');

    // }

}
