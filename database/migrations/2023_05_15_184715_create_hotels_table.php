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
        Schema::create('hotels', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->string('name');
            $table->Integer('price');
            $table->tinyInteger('ranking');
            $table->text('description');
            $table->string('logo');
            $table->json('image');
            $table->bigInteger('address_id')->unsigned();
            $table->bigInteger('service_id')->unsigned();
            $table->timestamps();

            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
