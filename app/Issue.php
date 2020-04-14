<?php

namespace App\Inboxmag;

use App\Inboxmag\Magazine;
use app\Inboxmag\Article;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    public function magazine()
    {
    	return $this->belongsTo(Magazine::class);
    }

    public function articles()
    {
    	return $this->belongsToMany(Article::class);
    }
}
