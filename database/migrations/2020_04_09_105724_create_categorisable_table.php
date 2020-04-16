<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorisableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorisables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('categorisable_id')->index();
            $table->string('categorisable_type');
            $table->timestamps();
            $table->softDeletes();

            // Define the unique (and pass a name for the field, as the concatenated auto-generated nae is too long)
            $table->unique(['category_id', 'categorisable_id', 'categorisable_type'], 'categorisable_unique');

            // Add foreign key
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            // $table->foreign('magazine_id')->references('id')->on('magazines')->onDelete('cascade');

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
        Schema::dropIfExists('categorisables');
    }
}
