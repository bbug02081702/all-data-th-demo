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
        Schema::create('motels', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('price');
            $table->integer('area')->nullable();
            $table->integer('count_view')->nullable();
            $table->string('address');
            $table->string('latlng')->nullable();
            $table->string('images');
            $table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->string('utilities')->nullable();
            $table->string('phone')->nullable();
            $table->integer('approve')->nullable();
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
        Schema::dropIfExists('motels');
    }
};
