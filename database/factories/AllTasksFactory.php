<?php

namespace Database\Factories;

use App\Models\AllTasks;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Statistics;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;

class AllTasksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AllTasks::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $arrayCounts = [20,40];
        $count = $arrayCounts[rand(0,1)];
        $time = $count * 5 + rand(-20, 20);
        $dataStat = [
            'total_mistakes' => rand(0,4),
            'count_easy' => 20,
            'count_hard' => 40,
            'total_time' => $time,
        ];
        $type = Config::get('constants.types');
        $type = $type[rand(0,3)];
        $statistic = new Statistics();
        $points = $statistic->computeRatingPoints($dataStat, $type);

        return [
            'user_id' => rand(1,10),
            'difficulty_type_id' => rand(1,2),
            'type' => $type,
            'count_examples' => $count,
            'mistakes' => $dataStat['total_mistakes'],
            'time' => $time,
            'points' => $points
        ];
    }
}
