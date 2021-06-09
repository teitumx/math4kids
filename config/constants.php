<?php
return [
    'difficulty' => [
        'hard' => [
            'summ' => [20 , 100],
            'diff' => [20 , 100],
            'mult' => [6 , 10],
            'div' =>  [6 , 10]
        ],
        'easy' => [
            'summ' => [2 , 20],
            'diff' => [2 , 20],
            'mult' => [2 , 5],
            'div' =>  [2 , 5]
        ]
    ],

    'types' => ['summ', 'mult', 'div', 'diff'],

    'scoresOfTypes' => [
        'summ' => 1,
        'diff' => 1.5,
        'mult' => 3,
        'div' => 4
    ]
];
