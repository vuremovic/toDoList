<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
            'task_name' => Str::random(10),
            'task_description' => Str::random(50),
            'notes' => Str::random(20),
            'date_completed_at' => Carbon::yesterday(),
            'is_reminded' => true,
            'is_archived' => false,
            'user_id' => 1,
            'status_id' => rand(1, 3),   
            'priority_id' => rand(1, 3),
            'category_id' => rand(1, 3),
            'reminder_id' => rand(1, 3)

        ]);
    }
}
