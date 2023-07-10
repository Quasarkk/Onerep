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
        Schema::create('trainings_exercises_join', function (Blueprint $table) {
            $table->foreignId('exercise_id')->constrained('exercises');
            $table->foreignId('training_id')->constrained('trainings');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings_exercises_join');
    }
};
