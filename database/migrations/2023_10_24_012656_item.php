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
        Schema::create('item', function (Blueprint $table) {

            $table->increments('itemID')->from('10001');
            $table->unsignedInteger('restaurant_ID');
            //$table->unsignedInteger('menu_ID');
            //$table->unsignedInteger('cuisineCat_ID');
            $table->string('itemName');
            $table->longText('description');
            $table->decimal('price', 9, 2);
            //$table->integer('itemOrder');
            //$table->string('location');
            $table->timestamps();
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item');
    }
};
