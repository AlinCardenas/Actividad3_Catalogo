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
        Schema::create('airline__destinations', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->bigInteger('destination_id')->unsigned();
            $table->bigInteger('airport_id')->unsigned();
            $table->bigInteger('airline_id')->unsigned();
            $table->timestamps();

            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');
            $table->foreign('airport_id')->references('id')->on('airports')->onDelete('cascade');
            $table->foreign('airline_id')->references('id')->on('airlines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airline__destinations');
    }
};
