<?php

namespace Database\Seeders;

use App\Models\UsersStatistics;
use Illuminate\Database\Seeder;

class UsersStatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsersStatistics::create([
            'id' => 1,
            'user_id' => 1,
            'count' => '1',
            'total_time' => '5',
            'points' => '10',
        ]);

        UsersStatistics::create([
            'id' => 2,
            'user_id' => 3,
            'count' => '3',
            'total_time' => '15',
            'points' => '30',
        ]);

        UsersStatistics::create([
            'id' => 3,
            'user_id' => 3,
            'count' => '2',
            'total_time' => '10',
            'points' => '20',
        ]);
    }
}
