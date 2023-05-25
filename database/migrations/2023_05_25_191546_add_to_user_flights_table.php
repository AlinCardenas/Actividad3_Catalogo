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
        Schema::table('user_flights', function (Blueprint $table) {
            $table->date('leave_date')->after('numAsiento');
            $table->date('arrive_date')->after('leave_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_flights', function (Blueprint $table) {
            $table->dropColumn('leave_date');
            $table->dropColumn('arrive_date');
        });
    }
};
