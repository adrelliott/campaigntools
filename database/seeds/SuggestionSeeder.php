<?php

use Illuminate\Database\Seeder;

class SuggestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Inboxmag\Suggestion::class, 500)->create();
    }
}
