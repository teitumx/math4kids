<?php

namespace Database\Seeders;

use App\Models\AllTasks;
use Illuminate\Database\Seeder;

class AllTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AllTasks::create([
            'id' => 1,
            'user_id' => 1,
            'difficulty_type_id' => 1,
            'type' => 1,
            'count_examples' => 20,
            'mistakes' => 0,
            'time' => 100,
            'points' => 40,
        ]);

        AllTasks::create([
            'id' => 2,
            'user_id' => 1,
            'difficulty_type_id' => 1,
            'type' => 1,
            'count_examples' => 20,
            'mistakes' => 1,
            'time' => 100,
            'points' => 30,
        ]);

        AllTasks::create([
            'id' => 3,
            'user_id' => 1,
            'difficulty_type_id' => 2,
            'type' => 1,
            'count_examples' => 40,
            'mistakes' => 1,
            'time' => 250,
            'points' => 60,
        ]);

        AllTasks::create([
            'id' => 4,
            'user_id' => 2,
            'difficulty_type_id' => 2,
            'type' => 1,
            'count_examples' => 40,
            'mistakes' => 1,
            'time' => 200,
            'points' => 75,
        ]);

        AllTasks::create([
            'id' => 5,
            'user_id' => 2,
            'difficulty_type_id' => 2,
            'type' => 1,
            'count_examples' => 40,
            'mistakes' => 0,
            'time' => 200,
            'points' => 80,
        ]);

        AllTasks::create([
            'id' => 6,
            'user_id' => 3,
            'difficulty_type_id' => 2,
            'type' => 1,
            'count_examples' => 40,
            'mistakes' => 1,
            'time' => 200,
            'points' => 75,
        ]);

        AllTasks::create([
            'id' => 7,
            'user_id' => 3,
            'difficulty_type_id' => 1,
            'type' => 1,
            'count_examples' => 20,
            'mistakes' => 0,
            'time' => 100,
            'points' => 40,
        ]);
    }
}
