<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->integer('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->boolean('email_verified')->default(0);
            $table->string('email_token')->nullable();
            $table->dateTime('email_token_expires')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('signature')->nullable();
            $table->string('image')->nullable();
            $table->string('timezone')->nullable();
            $table->string('hideemail')->nullable();
            $table->string('join')->nullable();
            $table->string('lastvisit')->nullable();
            $table->string('currentvisit')->nullable();
            $table->string('lastpost')->nullable();
            $table->dateTime('DOB')->nullable();
            $table->string('nationality')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('address')->nullable();
            $table->string('photo')->nullable();
            $table->string('ip');
            $table->dateTime('last_login')->nullable();
            $table->dateTime('last_action');
            $table->string('user_type')->nullable();
            $table->integer('points')->nullable();
            $table->boolean('active');
            $table->boolean('tos')->default(0);
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('password', 60);
            $table->boolean('confirmed')->default(0);
            $table->string('confirmation_code')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
