<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reminders')->insert([
            ['number_of_days' => rand(1, 10)],
            ['number_of_days' => rand(1, 10)],
            ['number_of_days' => rand(1, 10)]
            
        ]);
    }
}
