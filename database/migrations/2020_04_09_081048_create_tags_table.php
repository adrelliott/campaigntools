<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('tag_name')->nullable();
            $table->longText('tag_description')->nullable();
            $table->timestamps();
            $table->softDeletes();

            
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
        Schema::dropIfExists('tags');
    }
}
