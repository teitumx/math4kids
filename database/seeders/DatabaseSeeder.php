<?php

namespace Database\Seeders;

use App\Models\DifficultyType;
use Database\Seeders\AllTasksSeeder;
use App\Models\AllTasks;
use Database\Seeders\UsersSeeder;
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
        $this->call(DifficultyTypesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(QuestionsSeeder::class);
        $this->call(AllTasksSeeder::class);
        AllTasks::factory(100)->create();

    }
}
