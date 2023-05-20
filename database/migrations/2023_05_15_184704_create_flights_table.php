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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->date('leave_date');
            $table->date('arrive_date');
            $table->integer('count_clients');
            $table->time('duration');
            $table->integer('price');
            
            $table->foreignId('plane_id')->constrained();
            $table->foreignId('airline_destination_id')->references('id')->on('airline__destinations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
