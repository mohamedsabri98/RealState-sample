<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('realdata', function (Blueprint $table) {
            $table->id('property_id')->primary();
            $table->string('description');
            $table->string('address');
            $table->string('city');
            $table->string('state')->nullable();
            $table->string('zip_code');
            $table->decimal('price', 10, 2);
            $table->integer('number_of_bedrooms');
            $table->integer('number_of_bathrooms');
            $table->integer('square_footage');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realdata');
    }
};
