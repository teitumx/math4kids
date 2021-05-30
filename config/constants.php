<?php
return [
    'difficulty' => [
        'hard' => [
            'summ' => [20 , 100, 1, 4760], // [min, max, range question_id start, range question_id finish]
            'diff' => [20 , 100, 4761, 9600],
            'mult' => [6 , 10, 9601, 9645],
            'div' =>  [6 , 10, 9646, 9690]
            ],
        'easy' => [
            'summ' => [2 , 20, 9691, 9879],
            'diff' => [2 , 20, 9880, 10086],
            'mult' => [2 , 5,10087, 10122],
            'div' =>  [2 , 5, 10123, 10158]
            ]
        ],
    'types' => [
        'summ',
        'diff',
        'mult',
        'div'
   ]   
];