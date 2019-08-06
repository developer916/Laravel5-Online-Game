<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uploaded_user_id')->references('id')->on('users')->nullable();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->integer('size')->nullable();
            $table->string('path')->nullable();
            $table->string('description')->nullable();
            $table->boolean('allow_comment');
            $table->boolean('status');
            $table->integer('visibility_level')->default(0);
            $table->integer('download_level')->default(0);
            $table->string('dirname')->nullable();
            $table->string('basename')->nullable();
            $table->string('extension')->nullable();
            $table->string('filename')->nullable();

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
        Schema::drop('files');
    }
}
