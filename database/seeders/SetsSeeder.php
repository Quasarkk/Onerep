<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class SetsSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('sets')->insert([
            'number' => '1',
            'reps_previous' => '8',
            'reps_done' => '10',
            'weight_previous' => '60',
            'weight_done' => '60',
            '1rm' => '80',
            '1rm_reps' => '10',
            '1rm_weight' => '60',
            'exercise_id' => 1,
        ]);

        DB::table('sets')->insert([
            'number' => '2',
            'reps_previous' => '8',
            'reps_done' => '10',
            'weight_previous' => '60',
            'weight_done' => '60',
            '1rm' => '80',
            '1rm_reps' => '10',
            '1rm_weight' => '60',
            'exercise_id' => 1,
        ]);

        DB::table('sets')->insert([
            'number' => '1',
            'reps_previous' => '8',
            'reps_done' => '10',
            'weight_previous' => '60',
            'weight_done' => '60',
            '1rm' => '80',
            '1rm_reps' => '10',
            '1rm_weight' => '60',
            'exercise_id' => 1,
        ]);
    }
}
