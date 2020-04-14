<?php

namespace App\Inboxmag;

use App\Inboxmag\Article;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function articles()
    {
    	// $this->belongsToMany(Article::class, 'article_category', 'article_id', 'category_id');
    	$this->belongsToMany(Article::class);
    }

    public function magazines()
    {
    	$this->belongsToMany(Magazine::class);
    }
}
