<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class ExerciseSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('exercises')->insert([
            'name' => 'Bench Press',
            'type' => 'poly',
            '1rm' => '80',
            'muscles' => 'chest',
        ]);

        DB::table('exercises')->insert([
            'name' => 'OVHP',
            'type' => 'poly',
            '1rm' => '60',
            'muscles' => 'shoulders',
        ]);


        DB::table('exercises')->insert([
            'name' => 'Triceps extension',
            'type' => 'iso',
            '1rm' => '32',
            'muscles' => 'triceps',
        ]);


        DB::table('exercises')->insert([
            'name' => 'Skullcrusher',
            'type' => 'iso',
            '1rm' => '41',
            'muscles' => 'triceps',
        ]);
    }
}
