<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('restaurant', function (Blueprint $table) {
            
            $table->increments('restaurantID')->from('10001');
            $table->unsignedBigInteger('owner_ID');
            $table->unsignedInteger('menu_ID');
            $table->string('phoneNumber');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->longText('description');
            $table->string('name');
            $table->timestamps();
            
            
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant');
    }
};
