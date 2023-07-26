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
            'onerm' => '80',
            'muscles' => 'chest',
            'icon_url' => '/Exercises_icons/benchpress_icon.svg',
            'sets_number' => '4',
        ]);

        DB::table('exercises')->insert([
            'name' => 'OVHP',
            'type' => 'poly',
            'onerm' => '60',
            'muscles' => 'shoulders',
            'sets_number' => '4',
        ]);


        DB::table('exercises')->insert([
            'name' => 'Triceps extension',
            'type' => 'iso',
            'onerm' => '32',
            'muscles' => 'triceps',
            'sets_number' => '4',

        ]);


        DB::table('exercises')->insert([
            'name' => 'Skullcrusher',
            'type' => 'iso',
            'onerm' => '41',
            'muscles' => 'triceps',
            'sets_number' => '4',

        ]);

        DB::table('exercises')->insert([
            'name' => 'Curl',
            'type' => 'iso',
            'onerm' => '38',
            'muscles' => 'biceps',
            'sets_number' => '4',

        ]);

        DB::table('exercises')->insert([
            'name' => 'squat',
            'type' => 'poly',
            'onerm' => '86',
            'muscles' => 'quads',
            'sets_number' => '4',

        ]);

        DB::table('exercises')->insert([
            'name' => 'leg extension',
            'type' => 'iso',
            'onerm' => '54',
            'muscles' => 'quads',
            'sets_number' => '4',

        ]);

        DB::table('exercises')->insert([
            'name' => 'crunch pulley',
            'type' => 'iso',
            'onerm' => '64',
            'muscles' => 'abs',
            'sets_number' => '4',

        ]);

        DB::table('exercises')->insert([
            'name' => 'vertical row',
            'type' => 'iso',
            'onerm' => '54',
            'muscles' => 'back',
            'sets_number' => '4',

        ]);

        DB::table('exercises')->insert([
            'name' => 'horizontal row',
            'type' => 'iso',
            'onerm' => '65',
            'muscles' => 'back',
            'sets_number' => '4',

        ]);

        DB::table('exercises')->insert([
            'name' => 'pendley row',
            'type' => 'poly',
            'onerm' => '84',
            'muscles' => 'back',
            'sets_number' => '4',

        ]);
    }
}
