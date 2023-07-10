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
        Schema::create('sets', function (Blueprint $table) {
            $table->id('id');
            $table->integer('number');
            $table->integer('reps_previous');
            $table->integer('reps_done');
            $table->integer('weight_previous');
            $table->integer('weight_done');
            $table->integer('1rm');
            $table->integer('1rm_reps');
            $table->integer('1rm_weight');

            $table->foreignId('exercise_id')->constrained('exercises');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sets');
    }
};
