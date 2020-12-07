<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            CategorySeeder::class,
            PrioritySeeder::class,
            ReminderSeeder::class,
            StatusSeeder::class,
            UserSeeder::class,
            UserCategorySeeder::class,
            TaskSeeder::class
            
        ]);
    }
}
