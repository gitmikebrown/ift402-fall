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
        Schema::create('menu', function (Blueprint $table) {
            
            $table->increments('menuID')->from('10001');
            $table->unsignedInteger('item_ID');
            $table->unsignedInteger('restaurant_ID');
            $table->unsignedInteger('menu_ID');
            //$table->string('title');
            //$table->integer('menuOrder');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
