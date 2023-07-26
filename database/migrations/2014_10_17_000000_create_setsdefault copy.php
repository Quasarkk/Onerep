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
        Schema::create('setsdefault', function (Blueprint $table) {
            $table->id('id');
            $table->integer('number');
            $table->integer('reps_target');
            $table->integer('weight_target');
            $table->integer('1rm');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setsdefault');
    }
};
