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
            'icon_url' => '/Exercises_icons/benchpress_icon.svg',
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

        DB::table('exercises')->insert([
            'name' => 'Curl',
            'type' => 'iso',
            '1rm' => '38',
            'muscles' => 'biceps',
        ]);

        DB::table('exercises')->insert([
            'name' => 'squat',
            'type' => 'poly',
            '1rm' => '86',
            'muscles' => 'quads',
        ]);

        DB::table('exercises')->insert([
            'name' => 'leg extension',
            'type' => 'iso',
            '1rm' => '54',
            'muscles' => 'quads',
        ]);

        DB::table('exercises')->insert([
            'name' => 'crunch pulley',
            'type' => 'iso',
            '1rm' => '64',
            'muscles' => 'abs',
        ]);

        DB::table('exercises')->insert([
            'name' => 'vertical row',
            'type' => 'iso',
            '1rm' => '54',
            'muscles' => 'back',
        ]);

        DB::table('exercises')->insert([
            'name' => 'horizontal row',
            'type' => 'iso',
            '1rm' => '65',
            'muscles' => 'back',
        ]);

        DB::table('exercises')->insert([
            'name' => 'pendley row',
            'type' => 'poly',
            '1rm' => '84',
            'muscles' => 'back',
        ]);
    }
}
