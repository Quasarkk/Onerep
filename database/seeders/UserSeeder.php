<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'pascal',
            'password' => Hash::make('motdepascal'),
        ]);

        DB::table('users')->insert([
            'name' => 'vincent',
            'password' => Hash::make('motdevincent'),
        ]);

        DB::table('users')->insert([
            'name' => 'clement',
            'password' => Hash::make('motdeclement'),
        ]);
    }
}
