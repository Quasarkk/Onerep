<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class TrainingSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('trainings')->insert([
            'name' => 'push',
            'number' => '1',
            'date' => '2023-07-09',
            'muscles' => 'chest',
        ]);

        DB::table('trainings')->insert([
            'name' => 'pull',
            'number' => '2',
            'date' => '2023-07-09',
            'muscles' => 'back',
        ]);

        DB::table('trainings')->insert([
            'name' => 'legs',
            'number' => '3',
            'date' => '2023-07-09',
            'muscles' => 'back',
        ]);

        DB::table('trainings')->insert([
            'name' => 'chest/biceps',
            'number' => '1',
            'date' => '2023-07-09',
            'muscles' => 'back',
        ]);

        DB::table('trainings')->insert([
            'name' => 'back/triceps',
            'number' => '2',
            'date' => '2023-07-09',
            'muscles' => 'back',
        ]);

        DB::table('trainings')->insert([
            'name' => 'shoulders/legs',
            'number' => '3',
            'date' => '2023-07-09',
            'muscles' => 'back',
        ]);

        DB::table('trainings')->insert([
            'name' => 'abs',
            'number' => '4',
            'date' => '2023-07-09',
            'muscles' => 'back',
        ]);
    }
}
