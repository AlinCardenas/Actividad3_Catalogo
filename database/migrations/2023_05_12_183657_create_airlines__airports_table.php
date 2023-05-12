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
        Schema::create('airlines__airports', function (Blueprint $table) {
            $table->BigInteger('aerolinea_id')->unsigned();
            $table->BigInteger('aeropuerto_id')->unsigned();
            $table->foreign('aerolinea_id')->references('id')->on('airlines')->onDelete('cascade');
            $table->foreign('aeropuerto_id')->references('id')->on('airports')->onDelete('cascade');
            $table->primary(['aerolinea_id', 'aeropuerto_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airlines__airports');
    }
};
