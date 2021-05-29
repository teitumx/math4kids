<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $difficulty = [
            1 => [
                'summ' => [20, 100],
                'diff' => [20, 100],
                'mult' => [6, 10],
                'div' => [6, 10]
            ],
            2 => [
                'summ' => [2, 20],
                'diff' => [2, 20],
                'mult' => [2, 5],
                'div' => [2, 5]
            ]
        ];

        foreach ($difficulty as $key => $value) {
            for ($r = $value['summ'][1]; $r > $value['summ'][0]; $r--) { // a + b = r
                for ($a = $r - 1; $a > 0; $a--) {
                    $b = $r - $a;
                    Question::create([
                        'text' => $a . ' + ' . $b,
                        'answer' => $r,
                        'difficulty_type_id' => $key,
                        'type' =>  'summ'
                    ]);
                };

            };
            for ($a = $value['diff'][1]; $a > $value['diff'][0]; $a--) { // a - b = r
                for ($b = $a; $b > 0; $b--) {
                    Question::create([
                        'text' => $a . ' - ' . $b,
                        'answer' => $a - $b,
                        'difficulty_type_id' => $key,
                        'type' =>  'diff'
                    ]);
                };

            };
            for ($a = $value['mult'][1]; $a >= $value['mult'][0]; $a--) { // a * b = r
                for ($b = 10; $b > 1; $b--) {
                    Question::create([
                        'text' => $a . ' X ' . $b,
                        'answer' => $a * $b,
                        'difficulty_type_id' => $key,
                        'type' =>  'mult'
                    ]);
                };

            };
            for ($a = $value['div'][1]; $a >= $value['div'][0]; $a--) { // r / b = a
                for ($b = 10; $b > 1; $b--) {
                    $r = $b * $a;
                    Question::create([
                        'text' => $r . ' / ' . $b,
                        'answer' => $a,
                        'difficulty_type_id' => $key,
                        'type' =>  'div'
                    ]);
                };
            };
        };
    }
}
