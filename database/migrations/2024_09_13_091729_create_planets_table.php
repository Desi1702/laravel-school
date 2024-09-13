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
        Schema::create('planets', function (Blueprint $table) {
            $table->id(); // Maakt een auto-increment integer kolom 'id'
            $table->string('name'); // Maakt een string kolom 'name'
            $table->string('description'); // Maakt een string kolom 'description'
            $table->integer('size_in_km'); // Maakt een integer kolom 'size_in_km'
            $table->timestamps(); // Maakt 'created_at' en 'updated_at' kolommen
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planets');
    }
};
