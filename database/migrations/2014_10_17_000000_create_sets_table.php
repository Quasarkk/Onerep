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
            $table->integer('reps_previous')->nullable();
            $table->integer('reps_done')->nullable();
            $table->integer('weight_previous')->nullable();
            $table->integer('weight_done')->nullable();
            $table->integer('1rm')->nullable();
            $table->integer('1rm_reps')->nullable();
            $table->integer('1rm_weight')->nullable();

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
