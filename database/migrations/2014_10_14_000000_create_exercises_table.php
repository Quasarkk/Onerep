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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['poly', 'iso']);
            $table->integer('1rm');
            $table->enum('muscles', ['biceps', 'triceps', 'chest', 'back', 'quads', 'hamstrings', 'abs', 'shoulders']);
            $table->string('icon_url')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
