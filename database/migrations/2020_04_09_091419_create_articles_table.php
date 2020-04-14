<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('article_name')->nullable();
            $table->longText('article_summary')->nullable();
            $table->string('link_text')->nullable();
            $table->longText('link');
            $table->string('article_type')->nullable();
            $table->integer('order')->nullable();
            $table->string('author')->default('inboxmag');
            // $table->foreignId('issue_id');
            // $table->foreignId('suggestion_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Add foreign keys
            $table->unsignedbigInteger('category_id')->index()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

            // Add foreign keys
            $table->unsignedbigInteger('issue_id')->index()->nullable();
            $table->foreign('issue_id')->references('id')->on('issues');

            // Add foreign keys
            $table->unsignedbigInteger('suggestion_id')->index()->nullable();
            $table->foreign('suggestion_id')->references('id')->on('suggestions');
            
            // Add foreign keys
            $table->unsignedbigInteger('user_id')->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('articles');
    }
}
