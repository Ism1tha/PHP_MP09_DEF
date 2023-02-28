<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => 'Task 1',
            'description' => 'Description 1',
            'completed' => false
        ]);
        DB::table('tasks')->insert([
            'title' => 'Task 2',
            'description' => 'Description 2',
            'completed' => true
        ]);
        DB::table('tasks')->insert([
            'title' => 'Task 3',
            'description' => 'Description 3',
            'completed' => false
        ]);
    }
}
