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
        Schema::table('trains', function (Blueprint $table) {
            $table->string('agency', 30);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->Timestamp('departure_time')->nullable();
            $table->Timestamp('arrival_time')->nullable();
            $table->string('train_Code', 12);
            $table->tinyInteger('train_length')->nullable();
            $table->boolean('is_in_time');
            $table->boolean('is_cancelled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('agency');
            $table->dropColumn('departure_station');
            $table->dropColumn('arrival_station');
            $table->dropColumn('departure_time');
            $table->dropColumn('arrival_time');
            $table->dropColumn('train_Code');
            $table->dropColumn('train_length');
            $table->dropColumn('is_in_time');
            $table->dropColumn('is_cancelled');
        });
    }
};
