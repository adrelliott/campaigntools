<?php

use Illuminate\Database\Seeder;

class InboxMagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // select all users
    	$users = App\User::all();

        // Loop through each user
        foreach ($users as $user) {

            // Create some magazines for this user
            $magazines = factory(App\Inboxmag\Magazine::class, 3)->create(['user_id' => $user->id]);

            // Now add some issues to each magazine
            foreach ($magazines as $magazine) {
                $issues = factory(App\Inboxmag\Issue::class, 10)->create(['magazine_id' => $magazine->id]);

                // Now add 5 articles to each issue 
                foreach ($issues as $issue) {
                	$articles = factory(App\Inboxmag\Article::class, 5)->create(['issue_id' => $issue->id]);
                
	                foreach ($articles as $article) {
	                	// Add a category
	                	$random_categories = App\Inboxmag\Category::all()->random(2);
	                	$article->categories()->saveMany($random_categories);

                        // Associate with a suggestion
                        // $suggestion = App\Inboxmag\Suggestion::all()->random(1);
                        // var_dump($suggestion->first());
                        // $article->suggestion()->save($suggestion->first());
	                }
            	}
        	}  
    	}
    }
    
}
