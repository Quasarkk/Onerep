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
            'email' => 'pascal@gmail.com',
            'password' => Hash::make('motdepascal'),
        ]);

        DB::table('users')->insert([
            'name' => 'vincent',
            'email' => 'vincent@gmail.com',
            'password' => Hash::make('motdevincent'),
        ]);

        DB::table('users')->insert([
            'name' => 'clement',
            'email' => 'clement@gmail.com',
            'password' => Hash::make('motdeclement'),
        ]);
    }
}
