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
        Schema::table('planets', function (Blueprint $table) {
            // Voeg de kolom 'solar_system_id' toe
            $table->unsignedBigInteger('solar_system_id')->nullable();

            // Definieer de foreign key relatie
            $table->foreign('solar_system_id')->references('id')->on('solar_systems')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('planets', function (Blueprint $table) {
            // Verwijder eerst de foreign key voordat je de kolom verwijdert
            $table->dropForeign(['solar_system_id']);
            $table->dropColumn('solar_system_id');
        });
    }
};
