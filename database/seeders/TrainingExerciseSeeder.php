<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainingExerciseSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('trainings_exercises_join')->insert([
            'training_id' => 1,
            'exercise_id' => 1,
        ]);

        DB::table('trainings_exercises_join')->insert([
            'training_id' => 1,
            'exercise_id' => 2,
        ]);

        DB::table('trainings_exercises_join')->insert([
            'training_id' => 1,
            'exercise_id' => 3,
        ]);
    }
}
