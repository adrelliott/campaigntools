<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'article_name' => 'Article name: ' . $faker->sentence(3),
        'article_summary' => $faker->paragraph,
        'link_text' => $faker->sentence,
        'link' => $faker->url,
        'article_type' => $faker->randomElement(
        	// Only want 1 in 7 to be an 'advert'
        	['article', 'article', 'article', 'article','article','article', 'advert']
        ),
        // 'author' => $faker->randomElement(
        // 	// Only want 1 in 7 to be an 'advert'
        // 	[1, 1, 1, 1,'article','article', 'advert']
        // ),
    ];
});
