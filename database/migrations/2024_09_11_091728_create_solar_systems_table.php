<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolarSystemsTable extends Migration
{
    public function up()
    {
        Schema::create('solar_systems', function (Blueprint $table) {
            $table->id(); // Zorgt voor een unsignedBigInteger 'id' kolom
            $table->string('name'); // Voeg een kolom voor de naam van het zonnestelsel toe
            $table->integer('age_in_years'); // Maakt een integer kolom age_in_years
        });
    }

    public function down()
    {
        Schema::dropIfExists('solar_systems');
    }
}
