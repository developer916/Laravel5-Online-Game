<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->references('id')->on('users')->nullable();
            $table->integer('parent_id')->references('id')->on('comments')->nullable();
            $table->integer('file_id')->references('id')->on('files')->nullable();
            $table->string('subject');
            $table->string('author');
            $table->string('value');
            $table->string('body');
            $table->string('type');
            $table->boolean('is_locked');
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
        Schema::drop('comments');
    }
}
