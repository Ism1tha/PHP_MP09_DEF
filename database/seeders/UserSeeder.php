<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Ismael Semmar",
            'email' => 'isgalvez24@gmail.com',
            'password' => Hash::make('test1234'),
        ]);
        DB::table('users')->insert([
            'name' => "Sergi Tur Badenas",
            'email' => 'sergitur@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
