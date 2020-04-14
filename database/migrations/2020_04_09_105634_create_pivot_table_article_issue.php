<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableArticleIssue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('article_issue', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('article_id');
        //     $table->unsignedBigInteger('issue_id');
        //     $table->timestamps();
        //     // $table->unique(['article_id', 'issue_id']);

        //     // Add foreign key
        //     $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        //     $table->foreign('issue_id')->references('id')->on('issues')->onDelete('cascade');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('article_issue');
    }
}
