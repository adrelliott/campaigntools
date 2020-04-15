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
    	$users = App\User::where('id', '!=', 1)->get();

        // Loop through each user
        foreach ($users as $user) {

            // Create some magazines for this user
            $magazines = factory(App\Inboxmag\Magazine::class, 3)->create(['user_id' => $user->id]);

            // Get all current contacts - we'll add them as contacts
            $contacts = App\Listmanager\Contact::where('user_id', $user->id)->get();

            // Now loop through each magazine and create subscribers, issues, 
            foreach ($magazines as $magazine) {
                // Add subscribers (only take 9, so we have some contacts with no subscriptions)
                $subscribers = $contacts->take(9);
                $magazine->addSubscribers($subscribers);
        
                // Add issues
                $issues = factory(App\Inboxmag\Issue::class, 10)->create();
                $magazine->addIssues($issues);

                // Now loop though each issue and add some articles
                foreach ($issues as $issue) {
                	$articles = factory(App\Inboxmag\Article::class, 5)->create(['issue_id' => $issue->id]);
                    $issue->addArticles($articles);
                
                    // Now add some categories & suggestions to each article
	                foreach ($articles as $article) {
	                	// Add a category
	                	$categories = factory(App\Inboxmag\Category::class, 3)
                            ->create();
                            $article->addCategories($categories);

                        // Associate this article with a suggestion
                            $suggestion = factory(App\Inboxmag\Suggestion::class)->create();
                            $article->claimSuggestion($suggestion);
	                }
            	}
        	}  
    	}
    }
    
}
