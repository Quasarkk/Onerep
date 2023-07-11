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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->integer('number');
            $table->date('date');
            $table->enum('muscles', ['biceps', 'triceps', 'chest', 'back', 'quads', 'hamstrings', 'abs', 'shoulders']);
            $table->foreignId('program_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
