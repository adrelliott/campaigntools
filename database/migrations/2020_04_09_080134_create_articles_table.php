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
            $table->foreignId('issue_id');
            $table->foreignId('suggestion_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
