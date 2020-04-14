<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('contactable_id');
            $table->string('contactable_type');
            $table->timestamps();

            // Define the unique (and pass a name for the field, as the concatenated auto-generated nae is too long)
            $table->unique(['contact_id', 'contactable_id', 'contactable_type'], 'contactable_unique');

            // Add foreign key
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactables');
    }
}
