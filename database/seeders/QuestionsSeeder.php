<?php

namespace Database\Seeders;

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
            'hard' => [
                'summ' => [20, 100],
                'diff' => [20, 100],
                'mult' => [6, 10],
                'div' => [6, 10]
            ],
            'easy' => [
                'summ' => [2, 20],
                'diff' => [2, 20],
                'mult' => [2, 5],
                'div' => [2, 5]
            ]
        ];

        foreach ($difficulty as $key => $value) {
            for ($r = $value['summ'][1]; $r > $value['summ'][0]; $r--) { // a + b = r
                $question = [];
                for ($a = $r - 1; $a > 0; $a--) {
                    $b = $r - $a;
                    $question[0] = $a . ' + ' . $b; // text
                    $question[1] = $r; // answer
                    $question[2] = $key; // difficulty_type_id
                    $question[3] = 'summ'; // type
                    $arrayQuestions[] = $question;
                };

            };
            for ($a = $value['diff'][1]; $a > $value['diff'][0]; $a--) { // a - b = r
                $question = [];
                for ($b = $a; $b > 0; $b--) {
                    $question[0] = $a . ' - ' . $b; // text
                    $question[1] = $a - $b; // answer
                    $question[2] = $key; // difficulty_type_id
                    $question[3] = 'diff'; // type
                    $arrayQuestions[] = $question;
                };

            };
            for ($a = $value['mult'][1]; $a >= $value['mult'][0]; $a--) { // a * b = r
                $question = [];
                for ($b = 10; $b > 1; $b--) {
                    $question[0] = $a . ' X ' . $b; // text
                    $question[1] = $a * $b; // answer
                    $question[2] = $key; // difficulty_type_id
                    $question[3] = 'mult'; // type
                    $arrayQuestions[] = $question;
                };

            };
            for ($a = $value['div'][1]; $a >= $value['div'][0]; $a--) { // r / b = a
                $question = [];
                for ($b = 10; $b > 1; $b--) {
                    $r = $b * $a;
                    $question[0] = $r . ' / ' . $b; // text
                    $question[1] = $a; // answer
                    $question[2] = $key; // difficulty_type_id
                    $question[3] = 'div'; // type
                    $arrayQuestions[] = $question;
                };
            };
        };
    }
}
