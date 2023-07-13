<?php

use App\Models\Exercise;
use App\Models\Training;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exercise_training', function (Blueprint $table) {
            $table->foreignIdFor(Exercise::class);
            $table->foreignIdFor(Training::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_training');
    }
};
