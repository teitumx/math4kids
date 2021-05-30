<?php

namespace Database\Seeders;

use App\Models\DifficultyType;
use Illuminate\Database\Seeder;

class DifficultyTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DifficultyType::create([
            'title'=> 'easy',
            'score' => 10
        ]);

        DifficultyType::create([
           'title'=> 'hard',
           'score' => 20
        ]);
    }
}
