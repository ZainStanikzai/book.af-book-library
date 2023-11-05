<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger("user_id");
            $table->string("ISBN10")->nullable();
            $table->string("ISBN13")->nullable();
            $table->string("writer")->nullable();
            $table->string("publisher")->nullable();
            $table->date("publish_date")->nullable();
            $table->integer("pages");
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("book_media_id");
            $table->unsignedBigInteger("book_language_id");
            $table->integer("previos_price")->default(0);
            $table->integer("new_price")->default(0);
            $table->tinyInteger("rating")->default(0);
            $table->text("description")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
