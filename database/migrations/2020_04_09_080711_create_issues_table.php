<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->integer('issue_number');
            $table->string('issue_name');
            $table->longText('issue_description');
            $table->longText('introduction');
            $table->longText('sign_off');
            $table->datetime('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Add foreign keys: a magazine hasMany issues
            $table->unsignedbigInteger('magazine_id')->index()->nullable();
            $table->foreign('magazine_id')->references('id')->on('magazines');

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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('issues');
    }
}
