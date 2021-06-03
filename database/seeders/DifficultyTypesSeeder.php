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
            'count_examples' => 20
        ]);

        DifficultyType::create([
           'title'=> 'hard',
           'count_examples' => 40
        ]);
    }
}
