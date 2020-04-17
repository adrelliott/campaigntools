<?php

namespace App;

use App\Traits\CategorisableTrait;
use App\Traits\ContactableTrait;
use App\Traits\MultitenantableTrait;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use MultitenantableTrait, SoftDeletes;

    // Allow us to put Issues in categories (using polymorphic relationship)
    use CategorisableTrait;

    // Allow us to relate Issues to contacts (using polymorphic relationship)
    use ContactableTrait;



    // Add a single article to an issue
    public function addArticle($article)
    {
        $this->articles()->save($article);
    }

    // Add  article/articles to an issue
    public function addArticles($articles)
    {
        $this->articles()->saveMany($articles);
    }



    // ******** DEFINE RELATIONSHIPS
    public function magazine()
    {
    	return $this->belongsTo(Magazine::class);
    }

    public function articles()
    {
    	return $this->hasMany(Article::class);
    }
}
