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
            $table->engine='InnoDB';
            $table->id();
            $table->date('leave_date');
            $table->date('arrive_date');
            $table->integer('count_clients');
            $table->time('duration');
            $table->integer('price');
            $table->string('type_lunggage');
            
            $table->bigInteger('plane_id')->unsigned();
            $table->bigInteger('airline_destination_id')->unsigned();

            $table->timestamps();

            $table->foreign('plane_id')->references('id')->on('planes')->onDelete('cascade');
            $table->foreign('airline_destination_id')->references('id')->on('airline__destinations');
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
