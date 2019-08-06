<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('category_file', function (Blueprint $table) {
            $table->integer('file_id')->references('id')->on('files')->onDelete('cascade');
            $table->integer('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::drop('category_file');
    }
}
