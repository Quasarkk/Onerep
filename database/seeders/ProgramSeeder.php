<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class ProgramSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('programs')->insert([
            'name' => 'PPL',
            'begin_date' => '2023-07-09',
            'end_date' => '2023-07-21',
            'user_id' => 1,
            'status' =>'current',
        ]);

        DB::table('programs')->insert([
            'name' => 'Split',
            'begin_date' => '2023-07-16',
            'end_date' => '2023-09-24',
            'user_id' => 1,
            'status' =>'inactive',
        ]);
    }
}
