<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->double('price')->nullable();
            $table->string('description')->nullable();
            $table->string('title')->nullable();
            $table->integer('visibility_level')->default(0);
            $table->integer('download_level')->default(0);
            $table->integer('balance_value')->default(0)->nullable();
            $table->integer('balance_expiration')->default(0)->nullable();
            $table->integer('membership_expiration')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
