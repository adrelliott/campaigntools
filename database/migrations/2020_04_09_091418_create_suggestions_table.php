<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuggestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggestions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('excerpt')->nullable();
            $table->longText('link');
            $table->unsignedBigInteger('author_id')->default(1); // defaults to inboxmag
            $table->string('source')->default('pocket');
            $table->timestamps();
            $table->softDeletes();


            // Add foreign keys
            // $table->unsignedbigInteger('author_id')->index()->nullable()->defaul(1); // Defaults to Inboxmag
            // $table->foreign('author_id')->references('id')->on('authors');
            
            // Add foreign keys
            $table->unsignedbigInteger('organisation_id')->index()->nullable();
            $table->foreign('organisation_id')->references('id')->on('organisations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suggestions');
    }
}
